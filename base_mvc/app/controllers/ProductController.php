<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController {
    public $product;
    public function __construct() {
        $this->product = new Product();
    }
    public function index() {
        $products = $this->product->getProduct();
//        var_dump($products);
//        die;
        // biến products dùng để hứng dữ liệu
        // từ model
//        echo "Đây là list product ";
        // hien thi ra view product.index
        return $this->render('product.index',compact('products'));
    }
}