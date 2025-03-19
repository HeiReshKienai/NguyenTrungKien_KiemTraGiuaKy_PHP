<?php
require_once 'app/config/database.php';

// Kiểm tra kết nối đến cơ sở dữ liệu
$database = new Database();
$conn = $database->getConnection();

if ($conn) {
    echo "<h1>Kết nối cơ sở dữ liệu thành công!</h1>";
    
    // Kiểm tra xem bảng đã tồn tại chưa
    try {
        $result = $conn->query("SHOW TABLES");
        $tables = $result->fetchAll(PDO::FETCH_COLUMN);
        
        echo "<h2>Các bảng trong CSDL:</h2>";
        echo "<ul>";
        foreach ($tables as $table) {
            echo "<li>$table</li>";
        }
        echo "</ul>";
        
    } catch (PDOException $e) {
        echo "Lỗi khi truy vấn bảng: " . $e->getMessage();
    }
} else {
    echo "<h1>Kết nối cơ sở dữ liệu thất bại!</h1>";
}
