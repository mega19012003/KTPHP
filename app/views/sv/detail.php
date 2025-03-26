<?php include ('C:/xampp/htdocs/KT/app/views/shares/header.php'); ?>
<h2>Thông tin chi tiết sinh viên</h2>
<p><b>Họ Tên:</b> <?= $sinhVien['HoTen'] ?></p>
<p><b>Giới Tính:</b> <?= $sinhVien['GioiTinh'] ?></p>
<p><b>Ngày Sinh:</b> <?= $sinhVien['NgaySinh'] ?></p>
<p><b>Hình Ảnh:</b> <img src="<?= $sinhVien['Hinh'] ?>" width="100"></p>
<p><b>Ngành Học:</b> <?= $sinhVien['TenNganh'] ?></p>
<a href="index.php">Quay lại</a>
<?php include ('C:/xampp/htdocs/KT/app/views/shares/footer.php'); ?>