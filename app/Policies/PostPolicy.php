<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    /**
     * before() chạy trước mọi method khác
     * Admin (user_id = 1) bypass tất cả
     */
    public function before(User $user, string $ability): bool|null
    {
        // Admin (id=1) được phép làm mọi thứ
        if ($user->id === 1) {
            return true;
        }
        return null; // null = tiếp tục check method cụ thể
    }

    /**
     * Xem danh sách bài viết: ai cũng xem được (kể cả guest)
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Xem chi tiết bài viết: published thì ai cũng xem, draft chỉ tác giả
     */
    public function view(?User $user, Post $post): bool
    {
        if ($post->status === 'published') {
            return true;
        }
        // Bài draft: chỉ tác giả mới xem (nếu user đã đăng nhập)
        return $user?->id === $post->user_id;
    }

    /**
     * Tạo bài mới: phải đăng nhập (User non-nullable)
     */
    public function create(User $user): bool
    {
        return true; // Mọi user đăng nhập đều tạo được
    }

    /**
     * Sửa bài: chỉ tác giả (admin đã bypass qua before)
     */
    public function update(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    /**
     * Xóa bài: chỉ tác giả (admin đã bypass qua before)
     */
    public function delete(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    /**
     * Khôi phục bài đã xóa mềm: chỉ tác giả
     */
    public function restore(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    /**
     * Xóa vĩnh viễn: chỉ tác giả
     */
    public function forceDelete(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }
}