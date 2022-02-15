@extends('layouts.app')

@section('content')
@if ($thong_bao = Session::get('thong_bao'))
        <div class="alert alert-success">
            <p>{{ $thong_bao }}</p>
        </div>
    @endif
            <h1>Danh Sách Khách Hàng</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Email</th>
                    <th scope="col">SDT</th>
                </tr>
                </thead>
                <tbody>
                @if(count($customers) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($customers as $key => $customer)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $customer->name; }}</td>
                            <td>{{ $customer->email; }}</td>
                            <td>{{ $customer->phone; }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
@endsection