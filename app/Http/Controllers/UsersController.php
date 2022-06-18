<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function user($id) {
        $stmt = User::query()->where('id',$id)->first();
        return view('welcome', ['user' => $stmt]);
    }
}
