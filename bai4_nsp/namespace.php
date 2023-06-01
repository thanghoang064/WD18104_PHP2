<?php
include_once "nsp1.php";
include_once "nsp2.php";
$sv = new NSP1\SinhVien("aa",1997);// thực hiện việc khởi tạo sinh viên của file NSP1.php
$sv->hienThiThongTin();
$sv2 = new NSP2\SinhVien("bb",20);
$sv2->hienThiThongTin();
// namespace luôn luôn được đặt ở đầu file PHP
// namespace đóng vai trò là không gian tên đại diện cho class /fuction/biến  ở file đó
// và giải quyết các trường hợp các file khác nhau nhưng có class/function/biến giống nhau