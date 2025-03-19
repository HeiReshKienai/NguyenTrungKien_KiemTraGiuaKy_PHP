<?php
require_once 'app/config/database.php';
require_once 'app/models/HocPhanModel.php';
require_once 'app/models/DangKyModel.php';

class HocPhanController {
    private $hocPhanModel;
    private $dangKyModel;

    public function __construct() {
        $db = (new Database())->getConnection();
        $this->hocPhanModel = new HocPhanModel($db);
        $this->dangKyModel = new DangKyModel($db);
    }

    public function index() {
        $hocPhan = $this->hocPhanModel->getAllHocPhan();
        include 'app/views/hocphan/index.php';
    }

    public function dangky($MaHP) {
        $MaSV = $_SESSION['MaSV']; // Giả sử mã sinh viên được lưu trong session
        $this->dangKyModel->dangKyHocPhan($MaSV, $MaHP);
        header('Location: /php/websinhvien/HocPhan/cart');
    }

    public function cart() {
        $MaSV = $_SESSION['MaSV']; // Giả sử mã sinh viên được lưu trong session
        $hocPhanDaDangKy = $this->dangKyModel->getHocPhanDaDangKy($MaSV);
        include 'app/views/hocphan/cart.php';
    }

    public function xoaDangKy($MaHP) {
        $MaSV = $_SESSION['MaSV']; // Giả sử mã sinh viên được lưu trong session
        $this->dangKyModel->xoaDangKyHocPhan($MaSV, $MaHP);
        header('Location: /php/websinhvien/HocPhan/cart');
    }

    public function xoaTatCaDangKy() {
        $MaSV = $_SESSION['MaSV']; // Giả sử mã sinh viên được lưu trong session
        $this->dangKyModel->xoaTatCaDangKyHocPhan($MaSV);
        header('Location: /php/websinhvien/HocPhan/cart');
    }
}
?>