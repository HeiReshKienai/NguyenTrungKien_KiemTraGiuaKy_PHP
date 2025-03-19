<?php
class DangKyModel {
    private $conn;
    private $table_name_dangky = "DangKy";
    private $table_name_chitietdangky = "ChiTietDangKy";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function dangKyHocPhan($MaSV, $MaHP) {
        try {
            $this->conn->beginTransaction();

            // Thêm vào bảng DangKy
            $query = "INSERT INTO " . $this->table_name_dangky . " (NgayDK, MaSV) VALUES (NOW(), :MaSV)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':MaSV', $MaSV);
            $stmt->execute();
            $MaDK = $this->conn->lastInsertId();

            // Thêm vào bảng ChiTietDangKy
            $query = "INSERT INTO " . $this->table_name_chitietdangky . " (MaDK, MaHP) VALUES (:MaDK, :MaHP)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':MaDK', $MaDK);
            $stmt->bindParam(':MaHP', $MaHP);
            $stmt->execute();

            $this->conn->commit();
        } catch (Exception $e) {
            $this->conn->rollBack();
            throw $e;
        }
    }

    public function getHocPhanDaDangKy($MaSV) {
        $query = "SELECT hp.MaHP, hp.TenHP, hp.SoTinChi 
                  FROM " . $this->table_name_chitietdangky . " ctdk
                  JOIN " . $this->table_name_dangky . " dk ON ctdk.MaDK = dk.MaDK
                  JOIN HocPhan hp ON ctdk.MaHP = hp.MaHP
                  WHERE dk.MaSV = :MaSV";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':MaSV', $MaSV);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function xoaDangKyHocPhan($MaSV, $MaHP) {
        $query = "DELETE ctdk 
                  FROM " . $this->table_name_chitietdangky . " ctdk
                  JOIN " . $this->table_name_dangky . " dk ON ctdk.MaDK = dk.MaDK
                  WHERE dk.MaSV = :MaSV AND ctdk.MaHP = :MaHP";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':MaSV', $MaSV);
        $stmt->bindParam(':MaHP', $MaHP);
        $stmt->execute();
    }

    public function xoaTatCaDangKyHocPhan($MaSV) {
        $query = "DELETE ctdk 
                  FROM " . $this->table_name_chitietdangky . " ctdk
                  JOIN " . $this->table_name_dangky . " dk ON ctdk.MaDK = dk.MaDK
                  WHERE dk.MaSV = :MaSV";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':MaSV', $MaSV);
        $stmt->execute();
    }
}
?>