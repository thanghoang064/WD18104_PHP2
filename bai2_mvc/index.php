<?php
// file index giúp điều hướng tới  các hàm ở trong controller
//echo $_GET['url'];
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";

switch ($url) {
    case '/':
        // điều hướng về hàm listProduct trong ProductController
        require_once 'controllers/ProductController.php';
        echo listProduct();
        break;
    case 'add-product':
        // điều hướng về hàm add product trong ProductController
        require_once 'controllers/ProductController.php';
        echo  addProduct();
        break;
}
//tương tự tạo 1 function addProduct ở productcontroller và return ra "đây là
//trang thêm sản phẩm"
//điều hướng hướng sang function đấy bằng url add-product
//tương tự tạo 1 function deleteProduct ở productcontroller và return ra "đây là
//trang xóa  sản phẩm"
//điều hướng hướng sang function đấy bằng url delete-product
?>