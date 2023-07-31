@extends('templates.layout')
@section('content')
    <h1>{{ $title }} </h1>
    <form action="{{ route('edit-subject', ['id'=>request()->route('id')]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tên môn học</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1" value="{{ $subject->name }}">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@endsection
