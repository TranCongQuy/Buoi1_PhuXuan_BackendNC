<<<<<<< HEAD
@extends('layouts.app')

@section('title', 'Danh sách bài viết - Articles')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>📰 Danh sách bài viết</h2>
        <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary btn-sm">Xóa lọc</a>
    </div>

    {{-- Bộ lọc theo category (query string) --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <form method="GET" action="{{ route('articles.index') }}" class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label">📂 Danh mục</label>
                    <select name="category" class="form-select">
                        <option value="">Tất cả</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                                {{ $cat }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">🔍 Lọc</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Danh sách bài viết --}}
    @if(empty($articles))
        <div class="alert alert-info">Không có bài viết nào.</div>
    @else
        @foreach($articles as $article)
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $article['title'] }}</h5>
                    <p class="card-text">{{ $article['content'] }}</p>
                    <span class="badge bg-primary">{{ $article['category'] }}</span>
                    <span class="text-muted small ms-2">✍️ {{ $article['author'] ?? 'Ẩn danh' }}</span>
                </div>
            </div>
        @endforeach
        <p class="text-muted text-center">Tổng cộng: <strong>{{ count($articles) }}</strong> bài viết</p>
    @endif
</div>
@endsection
=======
<!-- resources/views/articles/index.blade.php -->
<!DOCTYPE html>
<html lang="vi">
<head>
 <meta charset="UTF-8">
 <title>Danh sách Bài viết</title>
 <style>
 body { font-family: Arial, sans-serif; max-width: 900px; margin: 40px
auto; padding: 0 20px; }
 .article-card { border: 1px solid #ddd; border-radius: 8px; padding:
16px; margin-bottom: 16px; }
 .article-card h3 { margin: 0 0 8px; color: #1B3F6E; }
 .meta { color: #888; font-size: 14px; }
 a.btn { background: #2E75B6; color: white; padding: 6px 14px; borderradius: 4px;
 text-decoration: none; font-size: 14px; }
 </style>
</head>
<body>
 <h1>📝 Danh sách Bài viết</h1>
 <p>Tổng cộng: <strong>{{ count($articles) }}</strong> bài viết</p>
 <hr>
 @forelse($articles as $article)
 <div class="article-card">
 <h3><a href="{{ route('articles.show', $article['id']) }}">{{ $article['title'] }}</a></h3>
 <p class="meta">
 ✍ {{ $article['author'] }} • 📅 {{ $article['date'] }}
 </p>
 </div>
 @empty
 <p>Chưa có bài viết nào.</p>
 @endforelse
<a href="{{ route('articles.create') }}" class="btn">Thêm bài viết mới</a>
 <br><br>
 <a href="{{ route('home') }}">← Trang chủ</a>
</body>
</html>
>>>>>>> 506f6d0231058084529b5e8e69646c8ce75575e4
