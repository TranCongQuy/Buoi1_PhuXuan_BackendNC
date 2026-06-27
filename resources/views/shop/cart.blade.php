@extends('layouts.app')

@section('title', 'Giỏ hàng')

@section('page-header')
    <h1>🛍️ Giỏ hàng</h1>
    <p class="mb-0">Sản phẩm bạn đã chọn</p>
@endsection

@section('content')
    <div class="alert alert-info">
        Hiện chưa có sản phẩm trong giỏ hàng.
    </div>
    <a href="{{ route('shop.products') }}" class="btn btn-secondary">🛒 Tiếp tục mua sắm</a>
@endsection