@extends('templates.layout')

@section('page_title')
Course list
@endsection

<!-- link thư viện JS -->
@section('head_js')
@endsection

<!-- gọi admin header -->
@section('header')
@include('default.header')
@endsection

<!-- Show content -->
@section('content')
<h1>List Course</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th>Thêm</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a href="">Sửa</a><a href="">Xóa</a></td>
    </tr>
</table>
@endsection

<!-- gọi admin footer -->
@section('footer')
@include('default.footer')
@endsection

<!-- JS nội tuyến -->
@section('page_js')
@endsection
