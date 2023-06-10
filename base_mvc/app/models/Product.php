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
    // lay chi tiet san pham
    public function getDetailProduct($id) {
        $sql = "select * from $this->table where id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function updateProduct($id,$tenSp,$gia) {
        $sql = "update $this->table set ten_sp = ?,gia = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute([$tenSp,$gia,$id]);
    }
    public function deleteProduct($id) {
        $sql = "delete from $this->table where id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}