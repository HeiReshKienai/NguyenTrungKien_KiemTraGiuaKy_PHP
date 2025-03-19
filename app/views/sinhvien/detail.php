<?php include 'app/views/shares/header.php'; ?>
<h1>Chi tiết sinh viên</h1>
<p><strong>Mã SV:</strong> <?= $student['MaSV'] ?></p>
<p><strong>Họ Tên:</strong> <?= $student['HoTen'] ?></p>
<p><strong>Giới Tính:</strong> <?= $student['GioiTinh'] ?></p>
<p><strong>Ngày Sinh:</strong> <?= $student['NgaySinh'] ?></p>
<p><strong>Hình:</strong> <img src="/php/websinhvien/public/images/<?= $student['Hinh'] ?>" alt="Hình" width="100"></p>
<p><strong>Ngành:</strong> <?= $student['TenNganh'] ?></p>
<a href="/php/websinhvien/Student">Quay lại</a>
<?php include 'app/views/shares/footer.php'; ?>