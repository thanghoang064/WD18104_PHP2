<?php
$a = 5 ; // khai báo kiểu dữ liệu là sô nguyên
$b = 5.5 ;// kiểu dữ liệu là số thực
$c = "hello"; // kiểu dữ liệu là String
$d  = false; // kiểu dữ liệu là boolean
//echo $c." ".$a; // nối chuỗi thì sử dụng dấu chấm
// mảng tuần tự
//cách 1
//$mang = array(5,6,7,8); // chạy đc trên mọi phiên bản
// cách 2
$mang1 = [5,6,7,8];  // chạy đc với phiên bản  > 7
// sử dụng vòng lặp for và foreach duyệt mảng hiển thị ra các phần tử là
// số chẵn trong m
//for ($i = 0 ; $i< count ($mang1); $i++){
//    echo $mang1[$i];
//}
// sử dụng foreach
//foreach ($mang1 as $key => $value) {
//    if ($value % 2 == 0) {
//        echo $value;
//    }
//}
//mảng liên hợp
$manglh = ["AA"=>6,"BB"=>7,"EE"=>8];
// hiển thị số 7 ra
//echo $manglh["AA"];
//echo $manglh["BB"];
//echo $manglh["EE"];
foreach ($manglh as $key=>$value) {
    echo $key."</br>"; // hiển thị ra vị trí trong mảng
    echo $value."</br>";
}
$thongtin = ["ten"=>"Huy","tuoi"=>18,"noi_sinh"=>"Hà nội"];
$mangMauSac = ["red"=>"Màu đỏ","blue"=>"Xanh nước biển","green"=>"Xanh cây"];
?>
<table border="1">
    <?php foreach ($mangMauSac as $key=>$value){ ?>
    <tr bgcolor="<?php echo $key; ?>">
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php
    }
    ?>
</table>
