<?php
class SinhVien {
    // khai báo thuộc tính tức là khai báo biến trong class
    public $tenSV;
    public $maSV;
    public $namSinh;
    // hàm khởi tạo (Magic fuction)
    public function __construct($tenSV,$maSV,$namSinh) {
        $this->tenSV = $tenSV;
        $this->maSV = $maSV;
        $this->namSinh = $namSinh;
    }
    // khai báo phương thức set giá trị cho thuộc tính tên sinh viên
    public function setTenSV($tenSV) {
        $this->tenSV = $tenSV;
    }
    public function tinhTuoi() {
        return date('Y') - $this->namSinh;
    }
    // khai báo phương thức tức là khai báo hàm trong class
    public function hienThiThongTinSV() {
        //trong lập trình hdt muốn sử dụng thuộc tính trong class ta phải
        // dùng thử khóa $this->tên thuộc tính
        echo $this->tenSV."-".$this->maSV."-".$this->namSinh."-".$this->tinhTuoi();

    }
}
// khởi tạo đối tượng (Tạo ra 1 ông sinh viên )
// khởi tạo đối tượng là phải có new
$sv1 = new SinhVien("dddddd","fffff",1997);
$sv1->setTenSV("Nguyễn Văn a");
$sv1->hienThiThongTinSV();
//xây dựng  1 hàm tính tuổi có trả về trong class (tuổi = năm hiện tại - năm sinh)
// hiển thị tuổi ở phương thức hienThiThongTinSV()
?>

//tạo 1 class GiangVien gồm các thuộc tính :maGV,tenGV,namBatDau,luongCB,soGioDay
//tạo phương thức set cho các thuộc tính ở trên
// tạo phương thức hienThiThongTinGV  gồm đầy đủ thông tin
// các thuộc tính đã đc set
// khởi tạo 1 đối tượng gv và thực hiện gọi hàm set và hàm hiển thị thông tin GV ra
