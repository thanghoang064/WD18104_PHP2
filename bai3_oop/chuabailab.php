<?php
class ConNguoi {
    public $hoten;
    public $diachi;
    public $namsinh;
    public $email;
    public $sdt;
    public function __construct($hoten,$namsinh) {
        $this->hoten = $hoten;
        $this->namsinh = $namsinh;
    }
    public function setHoTen($hoten) {
        $this->hoten = $hoten;
    }
    public function setNamSinh($namsinh) {
        $this->namsinh = $namsinh;
    }
    public function tinhTuoi() {
        return date('Y') - $this->namsinh;
    }
    public function hienThiThongTin() {
        echo $this->hoten."-".$this->namsinh."-".$this->tinhTuoi();
    }
}
class HocSinh extends ConNguoi {
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    public function __construct($hoten,$namsinh,$diemToan,$diemLy,$diemHoa) {
        //từ con gọi phương thức khởi tạo từ class cha như sau
        parent::__construct($hoten,$namsinh);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }
    public function setToan($diemToan) {
        $this->diemToan = $diemToan;
    }
    public function setLy($diemLy) {
        $this->diemLy = $diemLy;
    }
    public function setHoa($diemHoa) {
        $this->diemHoa = $diemHoa;
    }
    public function tinhDiemTB() {
        return ($this->diemToan + $this->diemLy + $this->diemHoa) / 3;
    }
    public function hienThiThongTinHS() {
        //cách gọi phương thức hiển thị thông tin từ class cha
        $this->hienThiThongTin();
        echo "-".$this->tinhDiemTB();
    }
}

$hs = new HocSinh("nguyen van a",2003,7,8,9);
//$hs->setHoTen("Nguyen van a");
//$hs->setNamSinh(2000);
//$hs->setHoa(4);
//$hs->setLy(5);
//$hs->setToan(6);
$hs->hienThiThongTinHS();

