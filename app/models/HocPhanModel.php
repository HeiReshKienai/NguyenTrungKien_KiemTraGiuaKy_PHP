<?php
class HocPhanModel {
    private $conn;
    private $table_name = "HocPhan";

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllHocPhan() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>