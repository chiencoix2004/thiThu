@extends('master')

@section('title')
    Thêm mới giảng viên
@endsection

@section('content')
    @if (!empty($_SESSION['errors']))
        <div class="alert alert-danger">
            <ul>
                @foreach ($_SESSION['errors'] as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table class="table">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter name" id="email">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email" id="pwd">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="phone" name="phone" class="form-control" placeholder="Enter phone" id="pwd">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Thêm</button>
            <a href="/giangvien/" class="btn btn-warning">Trở về</a>
        </form>

    </table>
@endsection
