<?php include 'app/views/shares/header.php'; ?>
<h1 class="text-center">TRANG SINH VIÊN</h1>
<a href="/php/websinhvien/Student/create" class="btn btn-primary mb-3">Add Student</a>
<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Mã SV</th>
            <th>Họ Tên</th>
            <th>Giới Tính</th>
            <th>Ngày Sinh</th>
            <th>Hình</th>
            <th>Ngành</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $student['MaSV'] ?></td>
                <td><?= $student['HoTen'] ?></td>
                <td><?= $student['GioiTinh'] ?></td>
                <td><?= date('d/m/Y', strtotime($student['NgaySinh'])) ?></td>
                <td>
                    <?php if ($student['Hinh']): ?>
                        <img src="/php/websinhvien/public/images/<?= $student['Hinh'] ?>" alt="Hình" class="img-thumbnail" width="100">
                    <?php else: ?>
                        Không có hình
                    <?php endif; ?>
                </td>
                <td><?= $student['TenNganh'] ?></td>
                <td>
                    <a href="/php/websinhvien/Student/detail/<?= $student['MaSV'] ?>" class="btn btn-info btn-sm">Details</a>
                    <a href="/php/websinhvien/Student/edit/<?= $student['MaSV'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/php/websinhvien/Student/confirmDelete/<?= $student['MaSV'] ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'app/views/shares/footer.php'; ?>