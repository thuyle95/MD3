@extends('layouts.app')
@section('content')
<h3>Thêm mới khách hàng</h3>
<form action="{{ route('customers.store') }}" method="post">
    @csrf
    <div class="form-group">
        <label>Tên khách hàng</label>
        <input class="form-control" type="text">
        <br>
        <button class="btn btn-primary" type="submit">Thêm mới</button>
    </div>
</form>
@endsection