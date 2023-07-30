@extends('templates.layout')
@section('page_title')
Login
@endsection



<!-- Show content -->
<div class="container">
    @auth
    <form action="" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Đăng xuất</button>
    </form>
    @else
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="loginemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="loginpassword" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Đăng nhập</button>
        <p>Chưa có tài khoản? <a href="">Đăng ký</a></p>
    </form>
    @endauth
</div>