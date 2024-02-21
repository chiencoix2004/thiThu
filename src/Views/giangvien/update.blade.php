@extends('master')

@section('title')
    Sửa giảng viên
@endsection

@section('content')
    <table class="table">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{$giangVien['name']}}" class="form-control"  id="email">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" value="{{$giangVien['email']}}" class="form-control" id="pwd">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="phone" name="phone" value="{{$giangVien['phone']}}" class="form-control"  id="pwd">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="/giangvien/" class="btn btn-warning">Trở về</a>
        </form>

    </table>
@endsection
