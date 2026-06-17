@extends('layouts.app')

@section('title', $post->title ?? 'Chi tiết bài viết')

@section('content')
    <x-alert type="success" :dismissible="true">
        <x-slot name="title">📖 Đang xem bài viết</x-slot>
        Bạn đang đọc bài viết: <strong>{{ $post->title ?? 'Không có tiêu đề' }}</strong>
    </x-alert>

    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title h2">{{ $post->title ?? 'Không có tiêu đề' }}</h1>
            <p class="text-muted small">
                ✍ {{ $post->author ?? 'Không rõ' }} · 
                📅 {{ $post->created_at ? $post->created_at->format('d/m/Y') : 'Không có ngày' }}
            </p>
            <hr>
            <p class="card-text">{{ $post->body ?? 'Nội dung đang được cập nhật...' }}</p>
            <div class="mt-3">
                <x-badge :status="$post->status ?? 'draft'" />
            </div>
        </div>
    </div>
    <div class="mt-3">
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">← Quay lại danh sách</a>
    </div>
@endsection