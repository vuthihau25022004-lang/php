
<?php
$products = [
    [
        "name" => "Bánh mì",
        "price" => 15000,
        "quantity" => 2
    ],
    [
        "name" => "Sữa",
        "price" => 30000,
        "quantity" => 1
    ],
    [
        "name" => "Trứng",
        "price" => 25000,
        "quantity" => 3
    ]
];
$tongtien = 0;
echo "========= DANH SÁCH SẢN PHẨM =========\n";
foreach ($products as $product) {
    $ten = $product["name"];
    $gia = $product["price"];
    $soluong = $product["quantity"];
    $thanhtien = $gia * $soluong;
    $tongtien += $thanhtien;
    echo "$ten - " . number_format($gia) . " VNĐ x $soluong = " . number_format($thanhtien) . " VNĐ\n";
}
echo "Tạm tính: " . number_format($tongtien) . " VNĐ\n";
if ($tongtien >= 100000) {
    $giam = $tongtien * 0.1;
} else {
    $giam = 0;
}
$thanhtoan = $tongtien - $giam;
echo "Giảm giá: " . number_format($giam) . " VNĐ\n";
echo "Thanh toán: " . number_format($thanhtoan) . " VNĐ\n";
?>