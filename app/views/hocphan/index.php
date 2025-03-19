<?php include 'app/views/shares/header.php'; ?>
<h1 class="text-center">DANH SÁCH HỌC PHẦN</h1>
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
        <?php foreach ($hocPhan as $hp): ?>
            <tr>
                <td><?= $hp['MaHP'] ?></td>
                <td><?= $hp['TenHP'] ?></td>
                <td><?= $hp['SoTinChi'] ?></td>
                <td>
                    <a href="/php/websinhvien/HocPhan/dangky/<?= $hp['MaHP'] ?>" class="btn btn-success btn-sm">Đăng Ký</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'app/views/shares/footer.php'; ?>