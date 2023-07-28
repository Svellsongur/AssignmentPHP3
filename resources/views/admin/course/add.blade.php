@extends('templates.layout')

<!-- Tiêu đề trang web -->
@section('page_title')
Course Add
@endsection

<!-- link thư viện JS -->
@section('head_js')
@endsection

<!-- gọi admin header -->
@section('header')
@include('admin.header')
@endsection

<!-- Show content -->
@section('content')
<h1>Add Course</h1>
<form action="" method="POST" enctype="multipart/form-data" class="border">
    <div class="row">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="row">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="row">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="row">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="row">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection

<!-- gọi admin footer -->
@section('footer')
@include('admin.footer')
@endsection

<!-- JS nội tuyến -->
@section('page_js')
@endsection