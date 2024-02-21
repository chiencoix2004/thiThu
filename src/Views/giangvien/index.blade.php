@extends('master')

@section('title')
    Danh sách giảng viên
@endsection

@section('content')
<a href="/giangvien/add" class="btn btn-warning">Thêm</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        @foreach ($giangViens as $giangVien)
        <tr>
            <td>{{$giangVien['id']}}</td>
            <td>{{$giangVien['name']}}</td>
            <td>{{$giangVien['email']}}</td>
            <td>{{$giangVien['phone']}}</td>
            <td>
                <a href="/giangvien/{{$giangVien['id']}}/update" class="btn btn-warning">Sửa</a>
                <a href="/giangvien/{{$giangVien['id']}}/delete" class="btn btn-danger" onclick="return confirm('có chắc xóa khônng')">Xóa</a> 
            </td>
        </tr>
            
        @endforeach
    </table>
@endsection