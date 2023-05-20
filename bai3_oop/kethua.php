<?php
class ConNguoi {
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function setChan($chan){
        $this->chan = $chan;
    }
    public function setTay($tay){
        $this->tay = $tay;
    }
    public function an() {
        echo "ăn bằng mồm";
    }
}
class NguoiLon extends ConNguoi {
    // định nghĩa thuộc tính
    public $longNach;
    //định nghĩa phương thức

    public function di() {
        echo "người lớn đi bằng".$this->chan."Chân";
    }

    public function noi() {

    }
}
class TreCon extends ConNguoi {
    public function bo() {
        echo "trẻ con bò bằng".$this->tay."tay".$this->chan;
    }

}
// khởi tạo đối tượng người lớn
$nl = new NguoiLon();
$nl->an();
$nl->setChan(2);
$nl->di();
$tc = new TreCon();
$tc->setTay(2);
$tc->setChan(2);
$tc->bo();
