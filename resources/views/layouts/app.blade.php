<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Phú Xuân Blog') | Phú Xuân Blog</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    @stack('styles')
    <style>
        body { font-family: 'Nunito', sans-serif; padding-top: 0; background: #f8f9fa; }
        .footer { background: #343a40; color: #aaa; padding: 20px 0; margin-top: 60px; }
        .footer a { color: #ccc; text-decoration: none; }
        .footer a:hover { color: #fff; }
        .page-header { background: linear-gradient(135deg, #1B3F6E 0%, #2E75B6 100%); color: white; padding: 40px 0; margin-bottom: 32px; }
        .alert { border-radius: 8px; }
        .alert-success { border-left: 4px solid #16a34a; }
        .alert-danger { border-left: 4px solid #dc2626; }
        .alert-warning { border-left: 4px solid #d97706; }
        .alert-info { border-left: 4px solid #0891b2; }
        .navbar-brand { font-weight: 700; }
        .dropdown-menu .dropdown-item:hover { background: #f1f3f5; }
    </style>
</head>
<body>
    @include('layouts.navigation')

    {{-- Flash Messages --}}
    <div class="container mt-3">
        @foreach (['success', 'error', 'warning', 'info'] as $type)
            @if (session($type))
                <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
                    @if ($type === 'success') ✅
                    @elseif ($type === 'error') ❌
                    @elseif ($type === 'warning') ⚠️
                    @else ℹ️ @endif
                    {{ session($type) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
        @endforeach
    </div>

    @hasSection('page-header')
        <div class="page-header">
            <div class="container">
                @yield('page-header')
            </div>
        </div>
    @endif

    <main class="container py-4">
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- MODAL YÊU CẦU ĐĂNG NHẬP --}}
    <div class="modal fade" id="loginRequiredModal" tabindex="-1" aria-labelledby="loginRequiredModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginRequiredModalLabel">🔒 Yêu cầu đăng nhập</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <p class="fs-5">Bạn cần đăng nhập để xem nội dung này.</p>
                    <p class="text-muted">Vui lòng đăng nhập hoặc đăng ký tài khoản để tiếp tục.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-4">🔑 Đăng nhập</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg px-4">📝 Đăng ký</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.alert-dismissible').forEach(function(alert) {
                setTimeout(function() {
                    var bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
                    if (bsAlert) bsAlert.close();
                }, 5000);
            });
        });
    </script>
    @stack('scripts')
</body>
</html>