@extends('layouts.app')
@section('content')
<h3>Thêm mới khách hàng</h3>
<!-- /resources/views/post/create.blade.php -->

<h1>Create Post</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
<form action="{{ route('customers.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label>Tên khách hàng</label>
        <input name="name" class="form-control" type="text" value="{{ old('email')}}">
        <br>
        <label>Email khách hàng</label>
        <input name="email" class="form-control" type="email">
        <br>
        <label>SDT khách hàng</label>
        <input name="phone" class="form-control" type="text">
        <br>
        <button class="btn btn-primary" type="submit">Thêm mới</button>
    </div>
</form>
@endsection