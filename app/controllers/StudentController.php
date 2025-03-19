<?php
require_once 'app/config/database.php';
require_once 'app/models/StudentModel.php';

class StudentController {
    private $studentModel;

    public function __construct() {
        $db = (new Database())->getConnection();
        $this->studentModel = new StudentModel($db);
    }

    public function index() {
        $students = $this->studentModel->getAllStudents();
        include 'app/views/sinhvien/index.php';
    }

    public function create() {
        include 'app/views/sinhvien/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $MaSV = $_POST['MaSV'];
            $HoTen = $_POST['HoTen'];
            $GioiTinh = $_POST['GioiTinh'];
            $NgaySinh = $_POST['NgaySinh'];
            $Hinh = $this->uploadImage($_FILES['Hinh']);
            $MaNganh = $_POST['MaNganh'];
            $this->studentModel->createStudent($MaSV, $HoTen, $GioiTinh, $NgaySinh, $Hinh, $MaNganh);
            header('Location: /php/websinhvien/Student/index');
        }
    }

    public function edit($id) {
        $student = $this->studentModel->getStudentById($id);
        include 'app/views/sinhvien/edit.php';
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $MaSV = $_POST['MaSV'];
            $HoTen = $_POST['HoTen'];
            $GioiTinh = $_POST['GioiTinh'];
            $NgaySinh = $_POST['NgaySinh'];
            $Hinh = $this->uploadImage($_FILES['Hinh'], $_POST['current_image']);
            $MaNganh = $_POST['MaNganh'];
            $this->studentModel->updateStudent($MaSV, $HoTen, $GioiTinh, $NgaySinh, $Hinh, $MaNganh);
            header('Location: /php/websinhvien/Student/index');
        }
    }

    public function confirmDelete($id) {
        $student = $this->studentModel->getStudentById($id);
        include 'app/views/sinhvien/confirm_delete.php';
    }

    public function delete($id) {
        $student = $this->studentModel->getStudentById($id);
        if ($student['Hinh']) {
            $this->deleteImage($student['Hinh']);
        }
        $this->studentModel->deleteStudent($id);
        header('Location: /php/websinhvien/Student/index');
    }

    public function detail($id) {
        $student = $this->studentModel->getStudentById($id);
        include 'app/views/sinhvien/detail.php';
    }

    private function uploadImage($file, $current_image = null) {
        if ($file['error'] === UPLOAD_ERR_OK) {
            $image_dir = BASE_PATH . '/public/images/';
            if (!file_exists($image_dir)) {
                mkdir($image_dir, 0755, true);
            }
            $image_tmp = $file['tmp_name'];
            $image_name = 'student_' . uniqid() . '_' . $file['name'];
            $target_path = $image_dir . $image_name;
            if (move_uploaded_file($image_tmp, $target_path)) {
                if ($current_image) {
                    $this->deleteImage($current_image);
                }
                return $image_name;
            }
        }
        return $current_image;
    }

    private function deleteImage($filename) {
        $filepath = BASE_PATH . '/public/images/' . $filename;
        if (file_exists($filepath)) {
            unlink($filepath);
        }
    }
}
?>