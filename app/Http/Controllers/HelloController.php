<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HelloController extends Controller
{
    public function index(){
        $data = [
            'first_name' => 'Isax',
            'last_name' => 'Siman'];
        return view('hello.index', $data);
    }
}
