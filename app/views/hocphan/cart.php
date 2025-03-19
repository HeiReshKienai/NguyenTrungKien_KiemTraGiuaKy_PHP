<?php include 'app/views/shares/header.php'; ?>
<h1 class="text-center">Đăng Kí Học Phần</h1>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Mã Học Phần</th>
            <th>Tên Học Phần</th>
            <th>Số Tín Chỉ</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hocPhanDaDangKy as $hp): ?>
            <tr>
                <td><?= $hp['MaHP'] ?></td>
                <td><?= $hp['TenHP'] ?></td>
                <td><?= $hp['SoTinChi'] ?></td>
                <td>
                    <a href="/php/websinhvien/HocPhan/xoaDangKy/<?= $hp['MaHP'] ?>" class="btn btn-danger btn-sm">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<p class="text-danger">Số học phần: <?= count($hocPhanDaDangKy) ?></p>
<p class="text-danger">Tổng số tín chỉ: <?= array_sum(array_column($hocPhanDaDangKy, 'SoTinChi')) ?></p>
<a href="/php/websinhvien/HocPhan/xoaTatCaDangKy" class="btn btn-link">Xóa Đăng Kí</a>
<a href="/php/websinhvien/HocPhan" class="btn btn-primary">Lưu đăng ký</a>
<?php include 'app/views/shares/footer.php'; ?>