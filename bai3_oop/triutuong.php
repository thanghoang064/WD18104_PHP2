<?php
abstract class DongVat {
    // 1 class được gọi là class trìu tượng khi nó chứa phương thức trìu tượng
    //class trìu tượng không thể khởi tạo
    // nhưng vẫn có phương thức và thuộc tính như class bình thường
    abstract public function di();
}

class ConNguoi extends DongVat {
    public function di()
    {
        echo "đi bằng 2 chân";
    }
}
class ConCho extends DongVat {
    public function di()
    {
        echo "đi bằng 4 chân";
    }
}
$cn = new ConNguoi();
$cn->di();
?>