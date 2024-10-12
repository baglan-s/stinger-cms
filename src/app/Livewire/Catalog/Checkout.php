<?php

namespace App\Livewire\Catalog;

use Livewire\Component;
use App\Services\CartService;
use App\Services\DeliveryAddressService;
use App\Services\OrderService;
use Illuminate\Support\Facades\Cookie;
use App\Models\Catalog\Store;
use App\Models\Catalog\City;
use App\Models\Catalog\DeliveryAddress;

class Checkout extends Component
{
    private CartService $cartService;

    private DeliveryAddressService $deliveryAddressService;

    public Store|null $selectedStore;

    public City $currentCity;

    public $products;

    public string $currentStep;

    public string $shippingMethod;

    public $deliveryAddresses;

    public DeliveryAddress|null $selectedDeliveryAddress = null;

    public bool $isNewAddress = false;

    public bool $hasReceiver = false;

    public string|null $receiverName = null;

    public string|null $receiverLastName = null;

    public string|null $receiverPhone = null;

    public string|null $receiverEmail = null;

    public string|null $street = null;

    public string|null $building = null;

    public string|null $apartment = null;

    public string|null $comment = null;

    public array $validErrors = [];

    public string $notificationMethod = 'sms';

    protected $listeners = [
        'onAddressAdd' => 'setAddress',
    ];


    public function __construct()
    {
        $this->cartService = app(CartService::class);
        $this->deliveryAddressService = app(DeliveryAddressService::class);
    }

    public function mount()
    {
        $this->currentCity = $this->cartService->getCurrentCity();
        $this->selectedStore = $this->cartService->selectedStore;
        $this->currentStep = 'delivery';
        $this->shippingMethod = $this->cartService->getShippingMethod();

        if ($this->currentStep == 'delivery' && $user = auth()->user()) {
            $this->deliveryAddresses = $user->deliveryAddresses()
                ->where('city', $this->currentCity?->translation()?->name)
                ->get();
            $this->isNewAddress = $this->deliveryAddresses->count() < 1;
            $this->selectedDeliveryAddress = $this->cartService->deliveryAddress ?? $this->deliveryAddresses->first();
        } else {
            $this->deliveryAddresses = collect([]);
        }

        $this->setCartData();
    }

    public function render()
    {
        return view('livewire.catalog.checkout');
    }

    public function toStep(string $step)
    {
        $this->currentStep = $step;
    }

    public function setCartData()
    {
        $this->products = $this->cartService->getProducts();
    }

    public function setShippingMethod(string $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
        $this->cartService->setShippingMethod($this->shippingMethod);
        $this->setCartData();
    }

    public function selectDeliveryAddress(DeliveryAddress|null $address)
    {
        $this->selectedDeliveryAddress = $address;
        $this->cartService->setDeliveryAddress($address);
        $this->setCartData();
    }

    public function setIsNewAddress(bool $isNewAddress = false)
    {
        $this->isNewAddress = $isNewAddress;
        $this->setCartData();
        $this->js('initGeoCoder()');
    }

    public function validateDelivery(): bool
    {
        $hasErrors = false;
        $this->validErrors = [];

        if ($this->isNewAddress) {
            if (!$this->street) {
                $hasErrors = true;
                $this->validErrors['street'] = 'Поле не может быть пустым';
            }

            if (!$this->building) {
                $hasErrors = true;
                $this->validErrors['building'] = 'Поле не может быть пустым';
            }
        }

        if ($this->hasReceiver) {
            if (!$this->receiverName) {
                $hasErrors = true;
                $this->validErrors['receiverName'] = 'Поле не может быть пустым';
            }

            if (!$this->receiverLastName) {
                $hasErrors = true;
                $this->validErrors['receiverLastName'] = 'Поле не может быть пустым';
            }

            if (!$this->receiverPhone) {
                $hasErrors = true;
                $this->validErrors['receiverPhone'] = 'Поле не может быть пустым';
            }
        }

        $this->setCartData();

        return $hasErrors;
    }

    public function toPayment()
    {
        if ($this->validateDelivery()) {
            return false;
        }

        if ($this->shippingMethod === 'delivery') {
            if ($this->isNewAddress) {
                $this->cartService->setDeliveryAddress(
                    $this->deliveryAddressService->createAddress([
                        'user_id' => auth()->user()?->id,
                        'city' => $this->currentCity?->translation()?->name,
                        'street' => $this->street,
                        'building' => $this->building,
                        'apartment' => $this->apartment,
                        'country' => 'Казахстан'
                    ])
                );
            } else {
                $this->cartService->setDeliveryAddress($this->selectedDeliveryAddress);
            }
        }

        $this->cartService->setHasReceiver($this->hasReceiver);

        if ($this->hasReceiver) {
            $this->cartService->setReveiverData(
                $this->receiverName,
                $this->receiverLastName,
                $this->receiverPhone,
                $this->receiverEmail,
                $this->comment
            );
        } else {
            $this->cartService->setComment($this->comment);
        }

        $this->currentStep = 'payment';
        $this->setCartData();
    }

    public function toDelivery()
    {
        $this->currentStep = 'delivery';
        $this->setCartData();
    }

    public function confirm()
    {
        $this->cartService->createOrder();
        $this->dispatch('cartDecremented');
        $this->currentStep = 'confirm';
    }

    public function updated()
    {
        $this->setCartData();
    }

    public function setNotificationMethod(string $notificationMethod)
    {
        $this->notificationMethod = $notificationMethod;
        $this->cartService->setNotificationMethod($notificationMethod);
        $this->setCartData();
    }

    public function setAddress(string $street, string $building)
    {
        $this->street = $street;
        $this->building = $building;
    }
}
