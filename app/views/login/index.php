<?php include 'app/views/shares/header.php'; ?>
<h1 class="text-center">ĐĂNG NHẬP</h1>
<form method="POST" action="/php/websinhvien/Login/authenticate" class="form-horizontal">
    <div class="form-group">
        <label class="control-label col-sm-2" for="MaSV">MaSV:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="MaSV" name="MaSV" required>
        </div>
    </div>
    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        </div>
    </div>
</form>
<a href="/php/websinhvien" class="btn btn-link">Back to List</a>
<?php include 'app/views/shares/footer.php'; ?>