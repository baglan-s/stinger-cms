<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageTranslation;

class PageController extends Controller
{
    public function index($slug)
    {
        $pageTranslation = PageTranslation::with('page')
            ->where('slug', $slug)
            ->first();

        echo $pageTranslation->content;
    }
}
