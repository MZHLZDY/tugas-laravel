<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\court_type;

class court_typeController extends Controller
{
    public function index(){
        $type = court_type::all();
        // return $type;
        return view('mcourt_type', compact('type'));
    }

    public function store(){

    }
}
