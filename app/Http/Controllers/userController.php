<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function index(){
        $user = User::all();
        // return ($user);
        return view('muser', compact('user'));
    }
}
