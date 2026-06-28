@extends('layouts.app')
<<<<<<< HEAD

=======
>>>>>>> 506f6d0231058084529b5e8e69646c8ce75575e4
@section('title', 'Không tìm thấy trang')

@section('content')
<div class="text-center py-5">
    <h1 class="display-4 fw-bold text-muted">404</h1>
    <h3 class="text-muted mb-4">Không tìm thấy trang bạn yêu cầu</h3>
    <p class="text-muted mb-4">Bài viết có thể đã bị xóa hoặc đường dẫn không chính xác.</p>
<<<<<<< HEAD
    {{-- Sửa: về danh sách bài viết của user --}}
    <a href="{{ route('posts.index', ['mine' => 1]) }}" class="btn btn-primary btn-lg">
=======
    <a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg">
>>>>>>> 506f6d0231058084529b5e8e69646c8ce75575e4
        Về trang danh sách
    </a>
</div>
@endsection