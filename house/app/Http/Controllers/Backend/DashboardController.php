<?php

namespace house\Http\Controllers\Backend;

use house\Post;
use house\User;

class DashboardController extends Controller
{
    public function index(Post $posts, User $users)
    {
		$posts = $posts->orderBy('updated_at', 'desc')->take(2)->get();
		
		$users = $users->whereNotNull('last_login_at')->orderBy('last_login_at', 'desc')->take(6)->get();
		
        return view('backend.dashboard', compact('posts', 'users'));
    }
}