<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sinh viên</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/php/websinhvien/public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="/php/websinhvien/public/js/main.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/php/websinhvien">Quản lý sinh viên</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/php/websinhvien/Student"><i class="fas fa-list"></i> Danh sách sinh viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/websinhvien/Student/create"><i class="fas fa-plus"></i> Thêm sinh viên</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/websinhvien/HocPhan"><i class="fas fa-book"></i> Học Phần</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/websinhvien/HocPhan/cart"><i class="fas fa-shopping-cart"></i> Đăng Kí (<?= count($_SESSION['hocPhanDaDangKy'] ?? []) ?>)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/php/websinhvien/Login"><i class="fas fa-sign-in-alt"></i> Đăng Nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">