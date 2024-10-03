<div class="cart-wrap">

    <div class="cart-head-wrap  h-container">
        <div class="cart-head">
            <h1>Контактная информация</h1>
            <x-catalog.cart-steps step-name="delivery" />
        </div>
        <div class="cart-head-mobile">
            {{-- <a href="{{ route('home') }}">
                <svg viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#03a9f4"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>arrow_left [#03a9f4]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -6679.000000)" fill="#03a9f4"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M338.61,6539 L340,6537.594 L331.739,6528.987 L332.62,6528.069 L332.615,6528.074 L339.955,6520.427 L338.586,6519 C336.557,6521.113 330.893,6527.014 329,6528.987 C330.406,6530.453 329.035,6529.024 338.61,6539" id="arrow_left-[#03a9f4]"> </path> </g> </g> </g> </g></svg>
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
                    <x-catalog.cart-steps.delivery />
                @endif


            </main>
            <aside class="cart-side">
                <div class="cart-side-mobile">
                    <div class="side-checkout">
                        <h5>Ваш заказ</h5>

                        <div class="cart-total-content">
                            <div class="cart-total-item">
                                <span class="cart-total-item__title">{{ $products->sum('quantity') }} товаров на сумму</span>
                                <span class="cart-total-item__price">{{ $products->sum('totalPrice') }} ₸</span>
                            </div>
                            @if ($products->sum('totalOldPrice') > 0)
                                <div class="cart-total-item">
                                    <span class="cart-total-item__title">Скидка</span>
                                    <span class="cart-total-item__price">{{ $products->sum('totalOldPrice') }} ₸</span>
                                </div>
                            @endif
                        </div>

                        <div class="cart-total-price">
                            <span>К оплате</span>
                            <span>{{ $products->sum('totalPrice') }} ₸</span>
                        </div>
                    </div>
                    <hr>
                    <button class="base-button mb-2">Продолжить</button>
                    <a class="base-button gray" href="{{ route('catalog.cart.index') }}">Назад</a>
                    <p class="mt-3">Нажимая на кнопку вы даете согласие на</p>
                    <div class="link-policy">
                        <a href="#">обработку персональных данных</a>
                    </div>

                </div>
            </aside>
        </div>
    </div>

</div>