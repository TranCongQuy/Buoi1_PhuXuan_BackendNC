@extends('layouts.app')

@section('title', 'Sản phẩm')

@section('page-header')
    <h1>🛒 Sản phẩm</h1>
    <p class="mb-0">Danh sách sản phẩm của cửa hàng</p>
@endsection

@section('content')
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="Sản phẩm 1">
                <div class="card-body">
                    <h5 class="card-title">Sản phẩm A</h5>
                    <p class="card-text">Mô tả sản phẩm A.</p>
                    <p class="fw-bold text-primary">100.000đ</p>
                    <a href="#" class="btn btn-primary btn-sm">Mua ngay</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="Sản phẩm 2">
                <div class="card-body">
                    <h5 class="card-title">Sản phẩm B</h5>
                    <p class="card-text">Mô tả sản phẩm B.</p>
                    <p class="fw-bold text-primary">200.000đ</p>
                    <a href="#" class="btn btn-primary btn-sm">Mua ngay</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="Sản phẩm 3">
                <div class="card-body">
                    <h5 class="card-title">Sản phẩm C</h5>
                    <p class="card-text">Mô tả sản phẩm C.</p>
                    <p class="fw-bold text-primary">300.000đ</p>
                    <a href="#" class="btn btn-primary btn-sm">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <a href="{{ route('shop.cart') }}" class="btn btn-success">🛍️ Xem giỏ hàng</a>
    </div>
@endsection