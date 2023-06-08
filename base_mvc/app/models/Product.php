<?php
namespace App\Models;
class Product extends BaseModel {
    protected $table = "product";
    // lấy danh sách sản phẩm
    public function getProduct() {
        $sql = "select * from $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    // thêm sản phẩm
    public function addProduct($id,$tenSP,$gia) {
        $sql = "insert into $this->table values (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id,$tenSP,$gia]);
    }
}