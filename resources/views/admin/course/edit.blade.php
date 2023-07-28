@extends('templates.layout')

@section('page_title')
Course list
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
<h1>Edit Course</h1>


@endsection

<!-- gọi admin footer -->
@section('footer')
@include('admin.footer')
@endsection

<!-- JS nội tuyến -->
@section('page_js')
@endsection