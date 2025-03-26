<?php include ('C:/xampp/htdocs/KT/app/views/shares/header.php'); ?>
<form method="post" enctype="multipart/form-data">
    Họ Tên: <input type="text" name="HoTen" value="<?= $sinhVien['HoTen'] ?>" required><br>
    Giới Tính: 
    <select name="GioiTinh">
        <option value="Nam" <?= ($sinhVien['GioiTinh'] == 'Nam') ? 'selected' : '' ?>>Nam</option>
        <option value="Nữ" <?= ($sinhVien['GioiTinh'] == 'Nữ') ? 'selected' : '' ?>>Nữ</option>
    </select><br>
    Ngày Sinh: <input type="date" name="NgaySinh" value="<?= $sinhVien['NgaySinh'] ?>" required><br>
    Hình: <label for="image">Ảnh:</label>
    <input type="file" name="image" accept="image/*" >
    Mã Ngành: <input type="text" name="MaNganh" value="<?= $sinhVien['MaNganh'] ?>" required><br>
    <button type="submit">Lưu</button>
</form>
<a href="index.php">Quay lại</a>
<?php include ('C:/xampp/htdocs/KT/app/views/shares/footer.php'); ?>