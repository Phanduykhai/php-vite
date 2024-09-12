@extends('layout.master') <!-- Kế thừa master.blade.php -->
@section('main')
    <h2>Chỉnh sửa bài viết: {{$post->name}}</h2>
    <form action="{{route('post.update',$post->id)}}" method="POST" role="form">
        @csrf @method('PUT')
        <div class="form-group">
            <label for="">Tên bài viết</label>
            <input class="form-control" name="name" value="{{$post->name}}">
            @error('name')
            <small class="help-block text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Trạng thái</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" value="1" checked>
                    Hiển thị
                </label>
                <label>
                    <input type="radio" name="status" value="0">
                    Ẩn
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
@stop()