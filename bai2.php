<?php
$name = "Nguyen Van An";
$score = 7.5;
if ($score >= 8) {
    $result = "Giỏi";
} 
elseif (6.5 <= $score && $score < 8) {
    $result = "Khá";
} 
elseif ( 5 <= $score && $score < 6.5) {
    $result = "Trung bình";
} 
else {
    $result = "Yếu";
}
echo "Học viên: $name\n";
echo "Điểm: $score\n";
echo "Xếp loại: $result\n";
echo "Kết quả: " . ($score >= 5 ? "Đậu" : "Rớt") . "\n";
?>