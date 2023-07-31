@extends('templates.layout')
@section('content')
    <h1>{{ $title }} </h1>
    <form action="{{ route('add-subject') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên môn học</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
