<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckPostOwner
{
    public function handle(Request $request, Closure $next): Response
    {
        $post = $request->route('post');

        if (!$post) {
            abort(404, 'Không tìm thấy bài viết.');
        }

        if (!$post instanceof Post) {
            abort(404, 'Dữ liệu bài viết không hợp lệ.');
        }

        // Ép kiểu về int để so sánh chính xác
        if ((int) Auth::id() !== (int) $post->user_id) {
            abort(403, 'Bạn không có quyền thực hiện thao tác này.');
        }

        return $next($request);
    }
}