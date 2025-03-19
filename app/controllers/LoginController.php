<?php
require_once 'app/config/database.php';
require_once 'app/models/StudentModel.php';

class LoginController {
    private $studentModel;

    public function __construct() {
        $db = (new Database())->getConnection();
        $this->studentModel = new StudentModel($db);
    }

    public function index() {
        include 'app/views/login/index.php';
    }

    public function authenticate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $MaSV = $_POST['MaSV'];
            $student = $this->studentModel->getStudentById($MaSV);
            if ($student) {
                $_SESSION['MaSV'] = $student['MaSV'];
                header('Location: /php/websinhvien/HocPhan');
            } else {
                $error = "Mã sinh viên không đúng.";
                include 'app/views/login/index.php';
            }
        }
    }

    public function logout() {
        session_destroy();
        header('Location: /php/websinhvien/Login');
    }
}
?>