<?php include ('C:/xampp/htdocs/KT/app/views/shares/header.php'); ?>
<h2>Thông tin chi tiết sinh viên</h2>
<p><b>Họ Tên:</b> <?= $sinhVien['HoTen'] ?></p>
<p><b>Giới Tính:</b> <?= $sinhVien['GioiTinh'] ?></p>
<p><b>Ngày Sinh:</b> <?= $sinhVien['NgaySinh'] ?></p>
<?php if (!empty($sinhVien['Hinh'])): ?>
    <p><strong>Ảnh:</strong></p>
    <img src="/app/image/<?= $sinhVien['Hinh'] ?>" alt="Ảnh sinh viên" width="150">
<?php else: ?>
    <img src="/app/image/<?= $sinhVien['Hinh'] ?>" alt="Ảnh sinh viên" width="150">
<?php endif; ?>
<p><b>Ngành Học:</b> <?= $sinhVien['TenNganh'] ?></p>
<a href="index.php">Quay lại</a>
<?php include ('C:/xampp/htdocs/KT/app/views/shares/footer.php'); ?>