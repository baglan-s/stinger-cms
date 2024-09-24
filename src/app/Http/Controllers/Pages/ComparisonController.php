<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.comparison");
    }
}
