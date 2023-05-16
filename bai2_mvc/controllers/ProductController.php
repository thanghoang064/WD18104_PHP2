<?php
    require_once "models/Product.php";
    function listProduct() {
        $products = getProduct(); // vì nó là hàm trả về nên tôi phải tạo 1 biến để hứng giá trị
        include_once "views/product/listproduct.php";
//        echo "<pre>";
//        var_dump($products);
//        die();
        //return "Đây là trang danh sách sản phẩm";
    }
    function addProduct() {
        return "đây là trang thêm sản phẩm";
    }
    //về nhà làm chức năng thêm và xóa
    //tạo 1 bảng customer gồm id,name,phone
    //làm chức năng danh sách,thêm và xóa
?>
