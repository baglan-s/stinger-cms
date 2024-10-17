<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('pages.catalog.cart');
    }

    public function checkout(Request $request)
    {
        return view('pages.catalog.checkout', [
            'step' => $request->get('step')
        ]);
    }
}
