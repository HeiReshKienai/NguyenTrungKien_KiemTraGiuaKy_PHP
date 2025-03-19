<?php include 'app/views/shares/header.php'; ?>
<h1 class="text-center">XÓA THÔNG TIN</h1>
<p class="text-center">Are you sure you want to delete this?</p>
<div class="card">
    <div class="card-body">
        <p><strong>Họ Tên:</strong> <?= $student['HoTen'] ?></p>
        <p><strong>Giới Tính:</strong> <?= $student['GioiTinh'] ?></p>
        <p><strong>Ngày Sinh:</strong> <?= date('d/m/Y', strtotime($student['NgaySinh'])) ?></p>
        <p><strong>Hình:</strong></p>
        <?php if ($student['Hinh']): ?>
            <img src="/php/websinhvien/public/images/<?= $student['Hinh'] ?>" alt="Hình" class="img-thumbnail" width="100">
        <?php else: ?>
            Không có hình
        <?php endif; ?>
        <p><strong>Ngành:</strong> <?= $student['MaNganh'] ?></p>
    </div>
</div>
<form method="POST" action="/php/websinhvien/Student/delete/<?= $student['MaSV'] ?>" class="mt-3">
    <button type="submit" class="btn btn-danger">Delete</button>
    <a href="/php/websinhvien" class="btn btn-link">Back to List</a>
</form>
<?php include 'app/views/shares/footer.php'; ?>