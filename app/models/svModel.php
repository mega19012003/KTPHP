<?php
require_once ('C:/xampp/htdocs/KT/app/config/database.php');

class SinhVien {
    public static function getAll() {
        global $conn;
        $stmt = $conn->query("SELECT * FROM SinhVien");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        global $conn;
        $stmt = $conn->prepare("
            SELECT sv.*, nh.TenNganh 
            FROM sinhvien sv
            LEFT JOIN nganhhoc nh ON sv.MaNganh = nh.MaNganh
            WHERE sv.MaSV = ?
        ");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

    public static function create($data) {
        global $conn;

        // Xử lý upload ảnh
        $targetDir = "C:/xampp/htdocs/KT/app/image/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
    
        // Chèn dữ liệu vào bảng SinhVien
        $stmt = $conn->prepare("INSERT INTO SinhVien (MaSV, HoTen, GioiTinh, NgaySinh, Hinh, MaNganh) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([
            $data['MaSV'], 
            $data['HoTen'], 
            $data['GioiTinh'], 
            $data['NgaySinh'], 
            $targetFilePath, // Lưu đường dẫn ảnh thay vì sai biến
            $data['MaNganh']
        ]);
    }

    public static function update($id, $data) {
        global $conn;
        $stmt = $conn->prepare("UPDATE SinhVien SET HoTen=?, GioiTinh=?, NgaySinh=?, Hinh=?, MaNganh=? WHERE MaSV=?");
        return $stmt->execute([$data['HoTen'], $data['GioiTinh'], $data['NgaySinh'], $data['Hinh'], $data['MaNganh'], $id]);
    }

    public static function delete($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM SinhVien WHERE MaSV = ?");
        return $stmt->execute([$id]);
    }
}
?>
