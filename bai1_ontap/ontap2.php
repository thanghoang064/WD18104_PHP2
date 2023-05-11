<?php
// hàm dùng gom code giúp dễ quản lý và mang lại tính tái sử dụng
//ví dụ trường hợp không có hàm
$a = 5;
//if ($a % 2 == 0) {
//    echo "đây là số chẵn";
//} else {
//    echo "Đây là số lẻ";
//}
$b = 6;
//if ($b % 2 == 0) {
//    echo "đây là số chẵn";
//} else {
//    echo "Đây là số lẻ";
//}
// hàm gồm 2 loại : có trả về và không trả về
//  demo hàm không trả về (Dấu hiện nhận biết không có return)
function ktraChanLe($a) { // những gì trong khe ngoặc được gọi là tham số
    if ($a%2==0) {
        echo "Đây là số chẵn ";
    } else {
        echo "Đây là số lẻ";
    }
}
ktraChanLe($a);//  là số lẻ
ktraChanLe($b); // là sổ chẵn
ktraChanLe(9); // là số lẻ
// demo hàm có trả về (Dấu hiện nhận biết có return)
function ktraChanLeCoTraVe($a) {
    if ($a % 2 == 0) {
        return 1; // là số chẵn trả về 1
    } else {
        return 0; // là số lẻ trả về 0
    }
}
echo ktraChanLeCoTraVe(3); // hiển thị ra 0
//xây dựng 1 hàm không trả về có những tham số như sau :
//hoten,namsinh,diachi,sdt,gioitinh(1/0)
//đầu ra hiển thị ra như thế này
//Ông Nguyễn Văn A 23 tuổi địa chỉ .... có sdt là ...
//ông/bà phụ thuộc vào giới tính (nếu là 1 là ông là 0 sẽ là bà)
// tuổi = năm hiện tại - năm sinh => tuổi (Xây dựng hàm tính tuổi có trả về)

