<?php include ('C:/xampp/htdocs/KT/app/views/shares/header.php'); ?>
<?php include ('C:/xampp/htdocs/KT/app/config/database.php'); ?>
<h2>Danh sách Sinh viên</h2>
<a href="?action=create">Thêm sinh viên</a>
<table border="1">
    <tr>
        <th>Mã SV</th>
        <th>Họ Tên</th>
        <th>Giới Tính</th>
        <th>Ngày Sinh</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($sinhViens as $sv): ?>
        <tr>
            <td><?= $sv['MaSV'] ?></td>
            <td><?= $sv['HoTen'] ?></td>
            <td><?= $sv['GioiTinh'] ?></td>
            <td><?= $sv['NgaySinh'] ?></td>
            <td>
                <a href="?action=detail&id=<?= $sv['MaSV'] ?>">Xem</a> |
                <a href="?action=edit&id=<?= $sv['MaSV'] ?>">Sửa</a> |
                <a href="?action=delete&id=<?= $sv['MaSV'] ?>" onclick="return confirm('Xác nhận xóa?')">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include ('C:/xampp/htdocs/KT/app/views/shares/footer.php'); ?>
