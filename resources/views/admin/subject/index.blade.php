@extends('templates.layout')
@section('content')
    <h1>{{ $title }}</h1>
    <table class="table">
        @foreach ($listSubject as $sub)
            <tr>
                <td>{{ $sub->id }}</td>
                <td>{{ $sub->name }}</td>
                <td><a href="{{route('edit-subject',['id'=>$sub->id])}}">Sửa</a></td>
                <td><a href="{{route('delete-subject',['id'=>$sub->id])}}">Xóa</a></td>
            </tr>
        @endforeach
    </table>
    <form action="{{ route('search-subject') }}" method="POST">
        @csrf
        <input type="text" name="searchSubject">
        <input type="submit" value="Search" name="btnSubmit">
    </form>
@endsection
