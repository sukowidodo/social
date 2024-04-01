<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function index()
    {
        $user = auth()->user();
        $post = Post::with("user")->where("user_id", $user->id)->get();
        return view("pages.user.index", compact("post"));
    }


    function show(User $user)
    {
        return view("pages.user.show");
    }

    function edit(User $user)
    {
        return view("pages.user.edit");
    }
}
