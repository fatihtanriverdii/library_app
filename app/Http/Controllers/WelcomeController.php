<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->take(8)->get();
        return view('index', compact('books'));
    }

    public function index2()
    {
        $books = DB::table('books')->take(8)->get();
        return view('index2', compact('books'));
    }
}
