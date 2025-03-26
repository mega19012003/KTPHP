<?php include __DIR__ . 'C:/xampp/htdocs/KT/app/views/shares/header.php'; ?>
<h3>Bạn có chắc muốn xóa sinh viên này?</h3>
<p>Họ Tên: <?= $sinhVien['HoTen'] ?></p>
<p>Giới Tính: <?= $sinhVien['GioiTinh'] ?></p>
<p>Ngày Sinh: <?= $sinhVien['NgaySinh'] ?></p>
<form method="post">
    <button type="submit">Xóa</button>
    <a href="index.php">Hủy</a>
</form>
<?php include __DIR__ . 'C:/xampp/htdocs/KT/app/views/shares/footer.php'; ?>