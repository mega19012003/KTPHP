<?php
require_once 'C:/xampp/htdocs/KT/app/config/database.php';

class NganhHoc {
    public static function getAll() {
        global $conn;
        $stmt = $conn->query("SELECT * FROM NganhHoc");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM NganhHoc WHERE MaNganh = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
