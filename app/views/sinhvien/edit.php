<?php include 'app/views/shares/header.php'; ?>
<h1 class="text-center">Hiệu chỉnh thông tin sinh viên</h1>
<form method="POST" action="/php/websinhvien/Student/update" enctype="multipart/form-data" class="form-horizontal">
    <input type="hidden" name="MaSV" value="<?= $student['MaSV'] ?>">
    <input type="hidden" name="current_image" value="<?= $student['Hinh'] ?>">
    <div class="form-group">
        <label class="control-label col-sm-2" for="HoTen">Họ Tên:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="HoTen" name="HoTen" value="<?= $student['HoTen'] ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="GioiTinh">Giới Tính:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="GioiTinh" name="GioiTinh" value="<?= $student['GioiTinh'] ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="NgaySinh">Ngày Sinh:</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="NgaySinh" name="NgaySinh" value="<?= $student['NgaySinh'] ?>" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Hinh">Hình:</label>
        <div class="col-sm-10">
            <input type="file" class="form-control-file" id="Hinh" name="Hinh">
            <?php if ($student['Hinh']): ?>
                <img src="/php/websinhvien/public/images/<?= $student['Hinh'] ?>" alt="Hình" class="img-thumbnail mt-2" width="100">
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="MaNganh">Ngành:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="MaNganh" name="MaNganh" value="<?= $student['MaNganh'] ?>" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
<a href="/php/websinhvien/Student/index" class="btn btn-link">Back to List</a>
<?php include 'app/views/shares/footer.php'; ?>