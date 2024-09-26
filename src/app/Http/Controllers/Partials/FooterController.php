<?php

namespace App\Http\Controllers\Partials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function render()
    {
        return view('partials.footer');
    }
}
