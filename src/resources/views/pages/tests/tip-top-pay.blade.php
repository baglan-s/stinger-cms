@extends('layouts.main')

@push('styles')
    <script src="https://widget.tiptoppay.kz/bundles/widget.js"></script>
@endpush

@section('content')
    <h1>Hello world</h1>
    <button type="submit" class="pay-btn" id="checkout-pay-btn">Оплатить</button>
@endsection

@push('scripts')
    <script src="https://widget.tiptoppay.kz/bundles/widget.js"></script>
    <script>
        $(document).ready(function() {
            function pay() {
                var widget = new tiptop.Widget();
                widget.pay('auth', // или 'charge'
                    { //options
                        publicId: 'test_api_00000000000000000000002', //id из личного кабинета
                        description: 'Оплата товаров в example.com', //назначение
                        amount: 100, //сумма
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
                            $.each(options, function(key, value) {
                                console.log(key + ": " + value);
                                $.each(value, function (index, item) {
                                    console.log(index + ": " + item);
                                });
                            });
                        },
                        onFail: function(reason, options) { // fail
                            //действие при неуспешной оплате
                            alert(456);
                        },
                        onComplete: function(paymentResult,
                            options
                            ) { //Вызывается как только виджет получает от api.tiptoppay ответ с результатом транзакции.
                            //например вызов вашей аналитики
                            alert(123);
                        }
                    }
                )
            };

            $('#checkout-pay-btn').click(pay);
        });
    </script>
@endpush
