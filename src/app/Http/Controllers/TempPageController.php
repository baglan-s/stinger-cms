<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageTranslation;

class TempPageController extends Controller
{
    public function index($slug)
    {
        return view("pages.$slug");
    }
}
