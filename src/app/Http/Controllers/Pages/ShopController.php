<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Services\StoreService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class ShopController extends Controller
{
    public function __construct(
        private StoreService $storeService 
    ){}

    public function index(Request $request)
    {
        $cityId = Cookie::get('city_id', 1);
        $shops = $this->storeService->getRepository()->getPublicLocalByCityId($cityId);
        if ($shops->isEmpty()) {
            // Todo, временно поставил выборку по айди для алматы, когда появится выбор по main distribution center, нужно делать выборку по нему.
            $shops = $this->storeService->getRepository()->getPublicLocalByCityId(7);
        };
        
        return view('pages.shops', compact('shops'));
    }
}
