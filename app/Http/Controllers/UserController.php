<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function index()
    {
        $user = auth()->user();
        return view("pages.user.index");
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
