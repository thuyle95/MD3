@extends('app')
@section('content')
<h3 class="h3">Product List</h3>
<div class="row">
    @forelse($products as $product)
    <div class="col-md-3 col-sm-6">
        <div class="product-grid">
            <div class="product-image">
                <a href="#">
                    <img class="pic-1" src="{{asset('images/'.$product->image)}}">
                </a>
                <ul class="social">
                    <li><a href="" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    <li><a href="{{ route('add-to-cart', $product->id) }}" data-tip="Add to Cart">
                            <i class="fa fa-shopping-cart"></i></a></li>
                </ul>
                <span class="product-new-label">Sale</span>
                <!-- <span class="product-discount-label">20%</span> -->
            </div>
            <ul class="rating">
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star"></li>
                <li class="fa fa-star disable"></li>
            </ul>
            <div class="product-content">
                <h3 class="title">
                    <p href="#">{{ $product->name }}</p>
                </h3>
                <div class="price">{{ number_format($product->price) }}
                    <!-- <span>$20.00</span> -->
                </div>
                <a class="add-to-cart" href="{{ route('add-to-cart', $product->id) }}">+ Add To Cart</a>
            </div>
        </div>

    </div>
    @empty
    <p>{{ "Không có sản phẩm nào" }}</p>
    @endforelse
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Card-->
<div class="card shadow mb-5 bg-white rounded">
    <!--Card-Body-->
    <div class="card-body">
        <!--Card-Title-->
           
        <h3 class="card-title text-center shadow mb-5 rounded">Đặt vé tàu hỏa  <i class="fa fa-train" aria-hidden="true"></i></h3>
        <hr>
        <p class="searchText"><strong>Tìm chuyến</strong></p>
        <!--First Row-->
        <div style="padding-left: 15px;" class="row mb-3 mt-3"> <label class="radiobtn"><input type="radio" name="gender" value="male"> Một chiều</label> <label style="padding-left:15px;" class="radiobtn"><input type="radio" name="gender" value="male"> Khứ hồi</label> </div>
        <!--Second Row-->
        <div class="row">
            <div class="col-sm-6"> <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Ga đi</option>
                    <option value="1">New Delhi</option>
                    <option value="2">Mumbai</option>
                    <option value="3">Bangalore</option>
                </select> </div>
            <div class="col-sm-6">
                <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Ga đến</option>
                    <option value="1">New Delhi</option>
                    <option value="2">Mumbai</option>
                    <option value="3">Bangalore</option>
                </select>
            </div>
        </div>
        <!--Third Row-->
        <div class="row">
            <div class="col-sm-6"> <input placeholder="&#xf073; Ngày đi" type="text" id="date-picker-example" class="form-control datepicker mb-4" style="font-family:Arial, FontAwesome">
         </div>
            <div class="col-sm-6"> <input placeholder="&#xf073; Ngày về" type="text" id="date-picker-example" class="form-control datepicker" style="font-family:Arial, FontAwesome"> </div>
        </div>
        <!--Fourth Row-->
        <!-- <div class="row mt-4">
            <div class="col-sm-6"> <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Anytime</option>
                    <option value="1">6:00 AM</option>
                    <option value="2">3:00 PM</option>
                    <option value="3">6:00 PM</option>
                </select> </div>
            <div class="col-sm-6"> <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Anytime</option>
                    <option value="1">6:00 AM</option>
                    <option value="2">3:00 PM</option>
                    <option value="3">6:00 PM</option>
                </select> </div>
        </div> -->
        <!--Fifth Row-->
        <!-- <div class="row">
            <div class="col-sm-4"> <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Kids(0-14)</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select> </div>
            <div class="col-sm-4"> <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Adults(15-64)</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select> </div>
            <div class="col-sm-4"> <select class="browser-default custom-select mb-4" id="select">
                    <option value="" disabled="" selected="">Seniors(65+)</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select> </div> -->
        </div> <a href="#" class="btn btn-primary float-right mt-5">Tìm kiếm</a>
    </div>
</div>
@endsection