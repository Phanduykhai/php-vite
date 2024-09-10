@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <div class="img" style="text-align: left;">
                        <p><b><i>Anh dai dien:</i></b></p>
                        <img src="https://inkythuatso.com/uploads/images/2022/05/hinh-anh-meo-bua-buon-cuoi-nhat-12-09-56-39.jpg" style="width: 200px;" alt="Profile Photo">
                    </div>
                    <div>
                        <div class="form-group" >
                            <label for="name">{{ __('Name') }}</label>
                            <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" readonly>
                        </div>
                    </div>
                    <p>--------------------------------------------------------------------------------------------------------------------------------------</p>
                    <b>Thư Mục: </b>
                    <!-- Add more fields as needed -->
                    <a href="categories" target="_blank" rel="noopener noreferrer">Categories</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
