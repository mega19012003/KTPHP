<?php
require_once 'C:/xampp/htdocs/KT/app/models/svModel.php';
require_once 'C:/xampp/htdocs/KT/app/models/nganhModel.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $sinhViens = SinhVien::getAll();
        include 'C:/xampp/htdocs/KT/app/views/sv/list.php';
        break;

    case 'create':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            SinhVien::create($_POST);
            header("Location: ?action=index");
        }
        $nganhHocs = NganhHoc::getAll();
        include 'C:/xampp/htdocs/KT/app/views/sv/add.php';
        break;

    case 'edit':
        $id = $_GET['id'];
        $sinhVien = SinhVien::getById($id);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            SinhVien::update($id, $_POST);
            header("Location: ?action=index");
        }
        $nganhHocs = NganhHoc::getAll();
        include 'C:/xampp/htdocs/KT/app/views/sv/edit.php';
        break;

    case 'delete':
        $id = $_GET['id'];
        SinhVien::delete($id);
        header("Location: ?action=index");
        break;

    case 'detail':
        $id = $_GET['id'];
        $sinhVien = SinhVien::getById($id);
        // Truy vấn để lấy tên ngành học
        $nganh = NganhHoc::getById($sinhVien['MaNganh']);
        $sinhVien['TenNganh'] = $nganh['TenNganh'];
        include 'C:/xampp/htdocs/KT/app/views/sv/detail.php';
        break;

    default:
        echo "Hành động không hợp lệ";
}
