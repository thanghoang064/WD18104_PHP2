<?php
interface DiChuyen {
    // interface không phải là class cho nên nó sẽ không có thuộc tính và phương thức
    // như class bình thường
    // Nhưng nó sẽ có phương thức trìu tượng như abstract class
    function di(); // định nghĩa phương thức là nó sẽ tự hiểu là phương thức trìu tượng
}
class ConCho implements DiChuyen {
    public function di()
    {
        echo " Con chó đi bằng 4 chân";
    }
}
class ConNguoi implements DiChuyen {
    public function di()
    {
       echo "Con người đi bằng 2 chân";
    }
}
class Oto implements DiChuyen {
    public function di()
    {
        echo "Ô tô đi bằng 4 bánh";
    }
}
// interface và abstract đều là bản thiết kế cho dự án phần mềm
// interface là bản thiết kế cho các class có chung hành động nhưng khác bản chất
// abstract là bản thiết kế cho các class có chung bản chất
// mức độ mở rộng dự án của interface sẽ cao hơn