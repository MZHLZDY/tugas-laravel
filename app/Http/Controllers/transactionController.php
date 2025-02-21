<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaction;

class transactionController extends Controller
{
    public function index(){
        $transaction = transaction::all();
        // return ($transaction);
        return view('mtransaction', compact('transaction'));
    }
}
