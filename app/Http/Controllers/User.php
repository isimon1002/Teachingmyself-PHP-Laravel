<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class User extends Controller
{
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
}
