<?php
class SinhVien {
    // khai báo thuộc tính tức là khai báo biến trong class
    public $tenSV;
    public $maSV;
    public $namSinh;
    // khai báo phương thức set giá trị cho thuộc tính tên sinh viên
    public function setTenSV($tenSV) {
        $this->tenSV = $tenSV;
    }
    // khai báo phương thức tức là khai báo hàm trong class
    public function hienThiThongTinSV() {
        //trong lập trình hdt muốn sử dụng thuộc tính trong class ta phải
        // dùng thử khóa $this->tên thuộc tính
        echo $this->tenSV."-".$this->maSV."-".$this->namSinh;
    }
}
// khởi tạo đối tượng (Tạo ra 1 ông sinh viên )
// khởi tạo đối tượng là phải có new
$sv1 = new SinhVien();
$sv1->setTenSV("Nguyễn Văn a");
$sv1->hienThiThongTinSV();
?>
//tạo 1 class GiangVien gồm các thuộc tính :maGV,tenGV,namBatDau,luongCB,soGioDay
//tạo phương thức set cho các thuộc tính ở trên
// tạo phương thức hienThiThongTinGV  gồm đầy đủ thông tin
// các thuộc tính đã đc set
// khởi tạo 1 đối tượng gv và thực hiện gọi hàm set và hàm hiển thị thông tin GV ra
