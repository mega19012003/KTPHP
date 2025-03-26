<?php include ('C:/xampp/htdocs/KT/app/views/shares/header.php'); ?>
<h2>Thêm Sinh Viên</h2>
<form method="post" enctype="multipart/form-data">
    <label>Mã SV:</label> <input type="text" name="MaSV" required><br>
    <label>Họ Tên:</label> <input type="text" name="HoTen" required><br>
    <label>Giới Tính:</label> 
    <select name="GioiTinh">
        <option value="Nam">Nam</option>
        <option value="Nữ">Nữ</option>
    </select><br>
    <label>Ngày Sinh:</label> <input type="date" name="NgaySinh" required><br>
    <label for="image">Ảnh:</label>
    <input type="file" name="image" accept="image/*" required>
    <label>Ngành Học:</label>
    <select name="MaNganh">
        <?php foreach ($nganhHocs as $nganh): ?>
            <option value="<?= $nganh['MaNganh'] ?>"><?= $nganh['TenNganh'] ?></option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Thêm</button>
</form>
<?php include ('C:/xampp/htdocs/KT/app/views/shares/footer.php'); ?>