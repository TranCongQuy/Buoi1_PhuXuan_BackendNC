@extends('layouts.app')

@section('title', 'Dashboard')

@section('page-header')
    <h1>📊 Dashboard</h1>
    <p class="mb-0">Chào mừng bạn trở lại, {{ Auth::user()->name }}!</p>
@endsection

@section('content')
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">📝 Bài viết</h5>
                    @php
                        // Admin (user_id = 1) thấy toàn bộ bài viết
                        // User thường chỉ thấy bài viết của mình
                        $userId = Auth::id();
                        if ($userId == 1) {
                            $postCount = \App\Models\Post::count();
                            $label = 'Tổng số bài viết';
                        } else {
                            $postCount = \App\Models\Post::where('user_id', $userId)->count();
                            $label = 'Bài viết của bạn';
                        }
                    @endphp
                    <p class="display-6">{{ $postCount }}</p>
                    <p class="text-muted small">{{ $label }}</p>
                    <a href="{{ route('posts.index') }}" class="btn btn-primary btn-sm">Xem tất cả</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">✏️ Viết bài mới</h5>
                    <p class="text-muted">Tạo bài viết mới</p>
                    <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm">Viết bài</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">👤 Thông tin</h5>
                    <p class="text-muted">{{ Auth::user()->email }}</p>
                    <p class="text-muted small">
                        @if(Auth::id() == 1)
                            <span class="badge bg-danger">🔑 Admin</span>
                        @else
                            <span class="badge bg-secondary">👤 User</span>
                        @endif
                    </p>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">🚪 Đăng xuất</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection