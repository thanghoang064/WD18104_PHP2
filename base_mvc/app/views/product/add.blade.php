@extends('layout.main')
@section('content')
    @if(isset($_SESSION['errors']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']))
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif
    <form action="{{ BASE_URL."post-product" }}" method="POST">
        <table>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="ten_sp" value=""/></td>
            </tr>
            <tr>
                <td>Đơn giá</td>
                <td><input type="text" name="don_gia" value=""/></td>
            </tr>
            <tr>
                <td><input type="submit" name="add" value="Thêm" /></td>
            </tr>
        </table>
    </form>
@endsection