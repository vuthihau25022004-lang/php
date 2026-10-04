<?php
$dsn = "mysql:host=127.0.0.1;port=3306;dbname=QuanLySinhVien;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, "root", "", [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,      
    ]);

    $dssSinhVien = $pdo->query("SELECT TenSV, TenSV, Ngaysinh, Sdt, Email, Lop FROM SINHVIEN ORDER BY MaSV")->fetchAll();
    echo json_encode($dssSinhVien);

} catch (PDOException $e) {
    die("Không kết nối được database: " . $e->getMessage() . 
        "\nHãy kiểm tra: MySQL đã bật chưa? Đã chạy file database.sql chưa? Mật khẩu trong config.php đúng chưa?\n");
}