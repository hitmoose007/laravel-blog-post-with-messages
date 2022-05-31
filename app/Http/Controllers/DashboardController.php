<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $posts=$user->posts;
        return view('dashboard',[
            'user'=>$user,
            'posts'=>$posts,
        ]);
    }
}
