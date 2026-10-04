<?php
$tensanpam =  "Bánh mì";
$dongia = "15000";
$soluong = "3";
$thanhtien = $dongia * $soluong;
$vat = $thanhtien * 0.1;
$tongtien = $thanhtien + $vat;
echo "Tên sản phẩm: $tensanpam\t\n";
echo "Đơn giá: $dongia\n";
echo "Số lượng: $soluong\n";
echo "Thành tiền: $thanhtien\n";
echo "VAT: $vat\n";
echo "Tổng tiền: $tongtien\n";
?>