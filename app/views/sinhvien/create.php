<?php include 'app/views/shares/header.php'; ?>
<h1 class="text-center">THÊM SINH VIÊN</h1>
<form method="POST" action="/php/websinhvien/Student/store" enctype="multipart/form-data" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-2" for="MaSV">Mã SV:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="MaSV" name="MaSV" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="HoTen">Họ Tên:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="HoTen" name="HoTen" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="GioiTinh">Giới Tính:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="GioiTinh" name="GioiTinh" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="NgaySinh">Ngày Sinh:</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" id="NgaySinh" name="NgaySinh" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Hinh">Hình:</label>
        <div class="col-sm-10">
            <input type="file" class="form-control-file" id="Hinh" name="Hinh" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="MaNganh">Ngành:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="MaNganh" name="MaNganh" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Lưu</button>
        </div>
    </div>
</form>
<a href="/php/websinhvien" class="btn btn-link">Back to List</a>
<?php include 'app/views/shares/footer.php'; ?>