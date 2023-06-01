<?php
include_once "models/Customer.php";
include_once "models/Product.php";
include_once "controllers/ProductController.php";
include_once "controllers/CustomerController.php";
//sử dụng từ khóa use để gọi namespace
use Models\Product;
use Models\Customer;
use Controllers\ProductController;
use Controllers\CustomerController;

$product = new Product();
$customer = new Customer();
$productController = new ProductController();
$customerController = new CustomerController();
//namespace giúp gom nhóm các class lại để việc quản lý code dễ dàng hơn 