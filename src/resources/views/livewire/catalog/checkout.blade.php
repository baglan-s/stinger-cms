@push('styles')
<script src="https://widget.tiptoppay.kz/bundles/widget.js"></script>
@endpush
<div class="cart-wrap">

    <div class="cart-head-wrap  h-container">
        <div class="cart-head">
            <h1>Контактная информация</h1>
            <x-catalog.cart-steps :step-name="$currentStep" />
        </div>
        <div class="cart-head-mobile">
            {{-- <a href="{{ route('home') }}">
            <svg viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#03a9f4">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <title>arrow_left [#03a9f4]</title>
                    <desc>Created with Sketch.</desc>
                    <defs> </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -6679.000000)" fill="#03a9f4">
                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                <path d="M338.61,6539 L340,6537.594 L331.739,6528.987 L332.62,6528.069 L332.615,6528.074 L339.955,6520.427 L338.586,6519 C336.557,6521.113 330.893,6527.014 329,6528.987 C330.406,6530.453 329.035,6529.024 338.61,6539" id="arrow_left-[#03a9f4]"> </path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
            Обратно к покупкам
            </a> --}}
        </div>
    </div>

    <div id="form" action="">
        <div class="cart h-container">
            <main class="cart-block-wrap">
                @if (!auth()->user())
                <x-catalog.cart-steps.auth />
                @elseif ($currentStep === 'delivery')
                <div class="cart-delivery">
                    @if ($shippingMethod === 'delivery')
                    <div class="delivery-header">
                        <h3 class="mb-3">Адрес доставки</h3>
                        @if ($deliveryAddresses->count() > 0)
                        @if ($isNewAddress)
                        <button class="address-toggle" wire:click="setIsNewAddress({{ false }})">Выбрать из списка</button>
                        @else
                        <button class="address-toggle" wire:click="setIsNewAddress({{ true }})">Добавить новый адрес</button>
                        @endif
                        @endif
                    </div>
                    @if ($deliveryAddresses->count() > 0 && !$isNewAddress)
                    <div class="delivery_2-address-top mb-3">
                        <div class="custom-select-wrapper">
                            <div class="live-select" x-data="{ open: false }">
                                <svg width="20px" height="20px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 14a.997.997 0 01-.707-.293l-5-5a.999.999 0 111.414-1.414L10 11.586l4.293-4.293a.999.999 0 111.414 1.414l-5 5A.997.997 0 0110 14z" fill="#5C5F62" />
                                </svg>
                                <div class="live-select__selected" @click="open = true">
                                    <span class="selected__text">{{ $selectedDeliveryAddress?->getFullAddress() ?? '-' }}</span>
                                </div>
                                <div class="live-select__options" x-show="open" @click.outside="open = false">
                                    @foreach ($deliveryAddresses as $deliveryAddress)
                                    <div @click="open = false" wire:click="selectDeliveryAddress({{ $deliveryAddress }})" @class(['live-select__option', 'selected'=> $selectedDeliveryAddress?->id == $deliveryAddress->id])>{{ $deliveryAddress->getFullAddress() }}</div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="new-address @if (!$isNewAddress) d-none @endif">
                        <div class="map-container" data-city="{{ $currentCity?->translation()?->name }}">
                            <div id="map"></div>
                        </div>

                        <div class="delivery_2-address-center">
                            <div class="form-floating delivery_2-street mb-3">
                                <input type="text" class="form-control delivery-street" id="floatingInput1" disabled placeholder="Улица" wire:model="street">
                                <label for="floatingInput1">Улица</label>
                                @if (isset($validErrors['street'])) <div class="invalid-feedbacks">{{ $validErrors['street'] }}</div> @endif
                            </div>
                            <div class="form-floating delivery_2-house mb-3">
                                <input type="text" class="form-control delivery-building" id="floatingInput2" disabled placeholder="Дом" wire:model="building">
                                <label for="floatingInput2">Дом</label>
                                @if (isset($validErrors['building'])) <div class="invalid-feedbacks">{{ $validErrors['building'] }}</div> @endif
                            </div>
                            <div class="form-floating delivery_2-apartment mb-3">
                                <input type="text" class="form-control delivery-flat" id="floatingInput3" placeholder="Квартира" wire:model="apartment">
                                <label for="floatingInput3">Квартира</label>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endif
                    <div class="delivery_1-consumer">
                        <h3 class="mb-3">Получатель</h3>
                        <div class="delivery_1-list">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="delivery-1-1" wire:model.live="hasReceiver" value="{{ 0 }}" checked>
                                <label class="form-check-label" for="delivery-1-1">Я</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" id="delivery-1-2" wire:model.live="hasReceiver" value="{{ 1 }}">
                                <label class="form-check-label" for="delivery-1-2">Другой человек</label>
                            </div>
                        </div>

                        @if ($hasReceiver)
                        <div class="cart-contact-form-new__delivery_1">
                            <div class="cart-contact-form-new__delivery__list">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name-1" placeholder="Имя" wire:model="receiverName">
                                    <label for="name-1">Имя</label>
                                    @if (isset($validErrors['receiverName'])) <div class="invalid-feedbacks">{{ $validErrors['receiverName'] }}</div> @endif
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="last_name-1" placeholder="Фамилия" wire:model="receiverLastName">
                                    <label for="last_name-1">Фамилия</label>
                                    @if (isset($validErrors['receiverLastName'])) <div class="invalid-feedbacks">{{ $validErrors['receiverLastName'] }}</div> @endif
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="phone-1" placeholder="Телефон" wire:model="receiverPhone">
                                    <label for="phone-1">Телефон</label>
                                    @if (isset($validErrors['receiverPhone'])) <div class="invalid-feedbacks">{{ $validErrors['receiverPhone'] }}</div> @endif
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email-1" placeholder="Email" wire:model="receiverEmail">
                                    <label for="email-1">Email</label>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="form-floating mt-3 delivery-comment">
                            <textarea class="form-control" placeholder="Оставьте комментарии к доставке" id="floatingTextarea2" style="height: 100px" wire:model="comment"></textarea>
                            <label for="floatingTextarea2">Комментарии</label>
                        </div>
                    </div>
                </div>
                @elseif ($currentStep == 'payment')
                <div class="cart-pay">
                    @if ($paymentTypes->count() > 0)
                    <h3 class="mb-3">Выберите тип оплаты</h3>
                    <div class="cart-payment-types d-flex align-items-center mb-4">
                        @foreach ($paymentTypes as $type)
                        <button @class(['pay-item-btn', 'active'=> $type->id == $paymentTypeId]) wire:click="setPaymentTypeId({{ $type->id }})">{{ $type->translation()?->name }}</button>
                        @endforeach
                    </div>
                    @endif
                    <h3 class="mb-3">Уведомления о статусе заказа</h3>
                    <div class="notification-togglers">
                        <div class="notification-toggler">
                            <div class="form-switch__text">
                                Оповещения через СМС
                            </div>
                            <label class="switch" wire:click="setNotificationMethod('sms')">
                                <input type="radio" name="notification_method" @if($notificationMethod==='sms' ) checked @endif>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="notification-toggler">
                            <div class="form-switch__text">
                                Оповещения через Whatsapp
                            </div>
                            <label class="switch" wire:click="setNotificationMethod('whatsapp')">
                                <input type="radio" name="notification_method" @if($notificationMethod==='whatsapp' ) checked @endif>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="notification-toggler">
                            <div class="form-switch__text">
                                Оповещения через Звонок
                            </div>
                            <label class="switch" wire:click="setNotificationMethod('phone')">
                                <input type="radio" name="notification_method" @if($notificationMethod==='phone' ) checked @endif>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>
                    <!-- Запускаем платежный фрейм -->
                    @if($isPaymentActive)

                    @endif

                </div>
                @elseif ($currentStep == 'confirm')
                <!-- Start Empty Cart -->
                <div class="cart-empty">
                    <h3 class="text-center">Спасибо за покупку!</h3>
                    <img src="{{ asset('assets/images/empty-cart.svg') }}" alt="">
                    <p class="text-center">Положите сюда что-нибудь, чтобы корзине было не так одиноко</p>
                    <a href="{{ route('home') }}">Перейти к покупкам</a>
                </div>
                <!-- End Empty Cart -->
                @endif

                <div wire:loading>
                    <x-catalog.preloader :class="['active', 'absolute']" />
                </div>
            </main>
            @if ($currentStep != 'confirm')
            <aside class="cart-side">
                <div class="cart-side-mobile">
                    <div class="side-checkout">
                        <h5>Ваш заказ</h5>

                        <div class="cart-total-content">
                            <div class="cart-total-item">
                                <span class="cart-total-item__title">{{ $products->sum('availableQuantity') }} товаров на сумму</span>
                                <span class="cart-total-item__price">{{ $products->sum('availableTotalPrice') }} ₸</span>
                            </div>
                            @if ($products->sum('availableTotalOldPrice') > 0)
                            <div class="cart-total-item">
                                <span class="cart-total-item__title">Скидка</span>
                                <span class="cart-total-item__price">{{ $products->sum('availableTotalOldPrice') }} ₸</span>
                            </div>
                            @endif
                        </div>

                        <div class="cart-total-price">
                            <span>К оплате</span>
                            <span>{{ $products->sum('availableTotalPrice') }} ₸</span>
                        </div>
                    </div>
                    <hr>
                    @if ($currentStep === 'delivery')
                    <button class="base-button mb-2" wire:click="toPayment()">Продолжить</button>
                    <a class="base-button gray" href="{{ route('catalog.cart.index') }}">Назад</a>
                    @else
                    <button class="base-button mb-2" wire:click="confirm()">Оформить заказ</button>
                    <button class="base-button mb-2" wire:click="toDelivery()">Назад</button>
                    @endif
                    <p class="mt-3">Нажимая на кнопку вы даете согласие на</p>
                    <div class="link-policy">
                        <a href="#">обработку персональных данных</a>
                    </div>

                </div>
            </aside>
            @endif
        </div>
    </div>

    <script>
        function initGeoCoder(coords1 = null, coords2 = null) {
            const mapContainer = document.querySelector('.map-container');
            const streetInput = document.querySelector('.delivery-street');
            const buildingInput = document.querySelector('.delivery-building');

            const ymaps = window.ymaps

            // Инициализация карты после загрузки API
            ymaps.ready(function() {
                var center = [43.237163, 76.945654];

                ymaps.geocode(mapContainer.dataset.city).then(function(res) {
                    var firstGeoObject = res.geoObjects.get(0);
                    if (firstGeoObject) {
                        // Получаем координаты
                        var coords = firstGeoObject.geometry.getCoordinates();
                        center = [coords[0], coords[1]];
                    }

                    var placemark;
                    var map = new ymaps.Map(document.querySelector('#map'), {
                        center: center,
                        zoom: 10
                    });

                    if (coords1 && coords2) {
                        createPlacemark([coords1, coords2])
                    }

                    function parseAdress(address) {
                        const addressParts = address.split(',');
                        const [city, street, building] = addressParts;

                        return {
                            city: city?.trim(),
                            street: street?.trim(),
                            building: building?.trim()
                        };
                    }

                    // Функция для создания метки на карте
                    function createPlacemark(coords) {
                        if (placemark) {
                            placemark.geometry.setCoordinates(coords);
                        } else {
                            placemark = new ymaps.Placemark(coords, {}, {
                                preset: 'islands#icon',
                                iconColor: '#0095b6'
                            });
                            map.geoObjects.add(placemark);
                        }
                    }

                    // Определение адреса по координатам
                    function getAddress(coords) {
                        placemark.properties.set('iconCaption', 'Идет поиск...');
                        ymaps.geocode(coords).then(function(res) {
                            var firstGeoObject = res.geoObjects.get(0);
                            var address = firstGeoObject.getAddressLine();

                            let parsedAddress = parseAdress(address);
                            window.Livewire.dispatch('onAddressAdd', {
                                street: parsedAddress.street,
                                building: parsedAddress.building ?? '-',
                                coords: coords
                            })

                            placemark.properties.set({
                                iconCaption: address,
                                balloonContent: address
                            });
                        }).catch(error => console.log(error));
                    }

                    if (map.events) {
                        // Слушаем клик на карте
                        map.events.add('click', function(e) {
                            var coords = e.get('coords');
                            createPlacemark(coords);
                            getAddress(coords);
                        });

                    }
                }).catch(error => {
                    console.error('Ошибка обработки запроса карты:', error);
                });

            });
        }

        // Online payment
        function pay(order) {
            var widget = new tiptop.Widget();
            widget.pay('auth', // или 'charge'
                { //options
                    publicId: order.publicId, //id из личного кабинета
                    description: order.description, //назначение
                    amount: order.amount, //сумма
                    currency: 'KZT', //валюта
                    accountId: 'user@example.com', //идентификатор плательщика (необязательно)
                    invoiceId: '1234567', //номер заказа  (необязательно)
                    email: 'user@example.com', //email плательщика (необязательно)
                    skin: "mini", //дизайн виджета (необязательно)
                    autoClose: 3, //время в секундах до авто-закрытия виджета (необязательный)
                    data: {
                        myProp: 'myProp value'
                    },
                    payer: {
                        firstName: 'Тест',
                        lastName: 'Тестов',
                        middleName: 'Тестович',
                        birth: '1955-02-24',
                        address: 'тестовый проезд дом тест',
                        street: 'Lenina',
                        city: 'MO',
                        country: 'KZ',
                        phone: '123',
                        postcode: '345'
                    }
                }, {
                    onSuccess: function(options) { // success
                        //действие при успешной оплате
                        alert(789);
                        Livewire.emit('paymentSuccess');
                        // $.each(options, function(key, value) {
                        //     alert(key + ": " + value);
                        //     console.log(key + ": " + value);
                        //     $.each(value, function (index, item) {
                        //         alert(index + ": " + item);
                        //         console.log(index + ": " + item);
                        //     });
                        // });
                    },
                    onFail: function(reason, options) { // fail
                        //действие при неуспешной оплате
                        alert('Ошибка платежа, попробуйте позднее');
                    },
                    onComplete: function(paymentResult,
                        options
                    ) { //Вызывается как только виджет получает от api.tiptoppay ответ с результатом транзакции.
                        //например вызов вашей аналитики
                        // Проверяем статус транзакции
                        alert(paymentResult.status);
                        if (paymentResult.success === true) {
                            Livewire.emit('savePayment', paymentResult.invoiceId);
                            if (paymentResult.invoiceId) {
                                // Отправляем invoiceId в Livewire компонент для сохранения
                                Livewire.emit('savePayment', paymentResult.invoiceId);
                            }
                        }
                    }
                }
            )
        };

        document.addEventListener('livewire:load', function() {
            window.addEventListener('payment-saved', function() {
                location.reload();
            });
        });

        //$('#checkout-pay-btn').click(pay);
    </script>

</div>