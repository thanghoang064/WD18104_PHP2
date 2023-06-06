@extends('layout.main')
@section('content')
    <table>
        <tr>
            <td>ID</td>
            <td>Ten san pham</td>
            <td>Gia</td>
        </tr>
        @foreach($products  as $pr)
        <tr>
            <td>{{ $pr->id }}</td>
            <td>{{ $pr->ten_sp }}</td>
            <td>{{ $pr->gia }}</td>
        </tr>
        @endforeach
    </table>
@endsection