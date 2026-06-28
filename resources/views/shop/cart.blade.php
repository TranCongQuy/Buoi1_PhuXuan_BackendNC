<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Giỏ hàng')

@section('content')
<div class="container">
    <h2>🛍️ Giỏ hàng</h2>
    <div class="alert alert-info">
        Hiện chưa có sản phẩm trong giỏ hàng.
    </div>
    <a href="{{ route('shop.products') }}" class="btn btn-secondary">🛒 Tiếp tục mua sắm</a>
</div>
@endsection
=======
<!DOCTYPE html>
<html><head><title>Giỏ hàng</title></head>
<body>
<h1>Giỏ hàng của bạn</h1>
<a href="{{ route('shop.products') }}">Tiếp tục mua sắm</a><br>
<a href="{{ route('home') }}">→ Trang chủ</a>
</body></html>
>>>>>>> 506f6d0231058084529b5e8e69646c8ce75575e4
