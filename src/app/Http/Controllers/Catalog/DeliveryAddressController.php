<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\DeliveryAddressUpdateRequest;
use App\Http\Requests\DeliveryAddressCreateRequest;
use App\Models\Catalog\City;
use Illuminate\Support\Facades\Cookie;

class DeliveryAddressController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.catalog.delivery-addresses', [
            'addresses' => $request->user()->deliveryAddresses,
            'currentCity' => City::find(Cookie::get('city_id')) ?? City::first()
        ]);
    }

    public function create(DeliveryAddressCreateRequest $request)
    {
        $data = $request->validated();
        $request->user()->deliveryAddresses()->create($data);

        return redirect()->route('account.addresses.index', $request->user()->id);
    }

    public function update(DeliveryAddressUpdateRequest $request, int $id)
    {
        $data = $request->validated();
        $address = $request->user()->deliveryAddresses()->findOrFail($id);
        $address->update($data);

        return redirect()->route('account.addresses.index', $request->user()->id);
    }

    public function destroy(Request $request, int $id)
    {
        $address = $request->user()->deliveryAddresses()->findOrFail($id);
        $address->delete();

        return redirect()->route('account.addresses.index', $request->user()->id);
    }
}
