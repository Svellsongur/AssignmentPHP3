@extends('templates.layout')
@section('content')
    <h1>{{ $title }}</h1>
    <table class="table">
        @foreach ($listTeacher as $tch)
            <tr>
                <td>{{ $tch->id }}</td>
                <td><img src="{{ Storage::url($tch->image)}}" alt="" style="width: 150px"></td>
                <td>{{ $tch->name }}</td>
                <td>{{ $tch->email }}</td>
                <td>{{ $tch->age }}</td>
                <td>{{ $tch->phone_number }}</td>
                @if ( $tch->gender == 1)
                    <td>Nam</td>
                @else
                    <td>Nữ</td>
                @endif
                <td>{{ $tch->address }}</td>
                <td><a href="{{route('edit-teacher',['id'=>$tch->id])}}">Sửa</a></td>
                <td><a href="{{route('delete-teacher',['id'=>$tch->id])}}">Xóa</a></td>
            </tr>
        @endforeach
    </table>
    <form action="{{ route('search-teacher') }}" method="POST">
        @csrf
        <input type="text" name="searchTeacher">
        <input type="submit" value="Search" name="btnSubmit">
    </form>
@endsection
