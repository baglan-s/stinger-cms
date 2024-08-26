<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageTranslation;
use Illuminate\Support\HtmlString;

class PageController extends Controller
{
    public function index($slug)
    {
        $pageTranslation = PageTranslation::with('page')
            ->where('slug', $slug)
            ->first();
        
        $content = (new HtmlString($pageTranslation->content))->toHtml();

        return view('pages.pages', compact('content'));
    }
}
