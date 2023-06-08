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
    public function addProduct() {
        return $this->render('product.add');
    }
    public function postProduct() {
        // khi người dùng click vào nút add
        if (isset($_POST['add'])) {
            //Tạo ra 1 mảng lỗi
            $errors = [];
            // nếu như bỏ trống tên sản phẩm
            if (empty($_POST['ten_sp'])) {
                // push tên lỗi vào trong mảng
                $errors[] = "Bạn không được để trống tên sản phẩm";
            }
            //nếu như bỏ trống đơn giá
            if (empty($_POST['don_gia'])) {
                //push tên lỗi vào trong mảng
                $errors[] = "Bạn không được để trống đơn giá";
            }
            if (count($errors) > 0 ){ // có lỗi
                // push mảng lỗi vào trong session
                $_SESSION['errors'] = $errors;
                //nhảy về trang add-product
                header("location:".BASE_URL."add-product");die;
            } else {

                $result = $this->product->addProduct(NULL,$_POST['ten_sp'],$_POST['don_gia']);
                if ($result) {
                    $_SESSION['success'] = "Thêm sản phẩm thành công";
                    header("location:".BASE_URL."add-product");die;
                }
            }
        }
    }
}