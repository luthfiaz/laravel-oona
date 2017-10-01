<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	// R of CRUD

    	$img = Images::where('select', 1)->first();

    	return view('image', compact('img'));
    }
}
