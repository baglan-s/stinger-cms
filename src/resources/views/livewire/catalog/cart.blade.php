<!-- Start Cart page content -->

<div class="cart-wrap">
    @if ($productCount > 0)
        <div class="cart-head-wrap  h-container">
            <div class="cart-head">
                <h1>Корзина</h1>
                <x-catalog.cart-steps step-name="cart" />
            </div>
            <div class="cart-head-mobile">
                <a href="{{ route('home') }}">
                    <svg viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#03a9f4"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>arrow_left [#03a9f4]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -6679.000000)" fill="#03a9f4"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M338.61,6539 L340,6537.594 L331.739,6528.987 L332.62,6528.069 L332.615,6528.074 L339.955,6520.427 L338.586,6519 C336.557,6521.113 330.893,6527.014 329,6528.987 C330.406,6530.453 329.035,6529.024 338.61,6539" id="arrow_left-[#03a9f4]"> </path> </g> </g> </g> </g></svg>
                    Обратно к покупкам
                </a>
                <button class="cart-reset-mobile" wire:click="clearCart">Очистить</button>
            </div>
        </div>



        <div class="cart-block-mobile">
            <button class="cart-reset" wire:click="clearCart">Очистить корзину</button>
            <ul class="order-list">
                @foreach ($products as $product)
                    <li class="order-item-mobile">
                        <div class="order-item">
                            <div class="order-item-image">
                                <img src="{{ $product->getDefaultImage() }}" alt="">
                            </div>
                            <div class="order-item-content">
                                <div class="order-item-prices">
                                    @if ($product->getDiscount() > 0)
                                        <span class="order-discount">{{ $product->getDiscount() }}%</span>
                                    @endif
                                    <div>
                                        <span class="order-price">{{ $product->totalPrice }} ₸</span>
                                        @if ($product->totalOldPrice > 0)
                                            <span class="order-old-price">{{ $product->totalOldPrice }} ₸</span>
                                        @endif
                                    </div>
                                </div>
                                <h3>{{ $product->translation()?->name }}</h3>
        
                                
                            </div>
                            <button class="order-delete" wire:click="removeFromCart('{{ $product->id }}', '{{ $product->quantity }}')" wire:loading.attr="disabled">
                                <svg viewBox="-3 0 32 32" version="1.1" 
                                xmlns="http://www.w3.org/2000/svg" 
                                xmlns:xlink="http://www.w3.org/1999/xlink" 
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs> </defs> <g id="Page-1" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-259.000000, -203.000000)" fill="#000000"> <path d="M282,211 L262,211 C261.448,211 261,210.553 261,210 C261,209.448 261.448,209 262,209 L282,209 C282.552,209 283,209.448 283,210 C283,210.553 282.552,211 282,211 L282,211 Z M281,231 C281,232.104 280.104,233 279,233 L265,233 C263.896,233 263,232.104 263,231 L263,213 L281,213 L281,231 L281,231 Z M269,206 C269,205.447 269.448,205 270,205 L274,205 C274.552,205 275,205.447 275,206 L275,207 L269,207 L269,206 L269,206 Z M283,207 L277,207 L277,205 C277,203.896 276.104,203 275,203 L269,203 C267.896,203 267,203.896 267,205 L267,207 L261,207 C259.896,207 259,207.896 259,209 L259,211 C259,212.104 259.896,213 261,213 L261,231 C261,233.209 262.791,235 265,235 L279,235 C281.209,235 283,233.209 283,231 L283,213 C284.104,213 285,212.104 285,211 L285,209 C285,207.896 284.104,207 283,207 L283,207 Z M272,231 C272.552,231 273,230.553 273,230 L273,218 C273,217.448 272.552,217 272,217 C271.448,217 271,217.448 271,218 L271,230 C271,230.553 271.448,231 272,231 L272,231 Z M267,231 C267.552,231 268,230.553 268,230 L268,218 C268,217.448 267.552,217 267,217 C266.448,217 266,217.448 266,218 L266,230 C266,230.553 266.448,231 267,231 L267,231 Z M277,231 C277.552,231 278,230.553 278,230 L278,218 C278,217.448 277.552,217 277,217 C276.448,217 276,217.448 276,218 L276,230 C276,230.553 276.448,231 277,231 L277,231 Z" id="trash" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                            </button>
                        </div>
                        <div class="order-item-options d-flex justify-content-end">
                            <div class="cart-item-amount">
                                <button class="cart-item-minus cart-item-btn" @if ($product->quantity <= 1) disabled @endif wire:click="removeFromCart('{{ $product->id }}')" wire:loading.attr="disabled">-</button>
                                <div class="cart-item-quantity">{{ $product->quantity }}</div>
                                <button class="cart-item-plus cart-item-btn" wire:click="addToCart('{{ $product->id }}')" wire:loading.attr="disabled">+</button>
                            </div>
                        </div>
                    </li> 
                @endforeach
            </ul>
        </div>

        

        <div class="cart h-container">
            <main class="cart-block-wrap">

                <div class="cart-block">
                    <button class="cart-reset" wire:click="clearCart">Очистить корзину</button>
                    <ul class="order-list">
                        @foreach ($products as $product)

                            <li class="order-item">
                                <div class="order-item-image">
                                    <img src="{{ $product->getDefaultImage() }}" alt="">
                                </div>
                                <div class="order-item-content">
                                    <h3>{{ $product->translation()?->name }}</h3>
                                </div>
                                <div class="order-item-options">
                                    <div class="cart-item-amount">
                                        <button class="cart-item-minus cart-item-btn" @if ($product->quantity <= 1) disabled @endif wire:click="removeFromCart('{{ $product->id }}')" wire:loading.attr="disabled">-</button>
                                        <div class="cart-item-quantity">{{ $product->quantity }}</div>
                                        <button class="cart-item-plus cart-item-btn" wire:click="addToCart('{{ $product->id }}')" wire:loading.attr="disabled">+</button>
                                    </div>
                                </div>
        
                                <div class="order-item-prices">
                                    @if ($product->getDiscount() > 0)
                                        <span class="order-discount">{{ $product->getDiscount() }}%</span>
                                    @endif
                                    <span class="order-price">{{ $product->totalPrice }} ₸</span>
                                    @if ($product->totalOldPrice > 0)
                                        <span class="order-old-price">{{ $product->totalOldPrice }} ₸</span>
                                    @endif
                                </div>
                                <button class="order-delete" wire:click="removeFromCart('{{ $product->id }}', '{{ $product->quantity }}')" wire:loading.attr="disabled">
                                    <svg viewBox="-3 0 32 32" version="1.1" 
                                        xmlns="http://www.w3.org/2000/svg" 
                                        xmlns:xlink="http://www.w3.org/1999/xlink" 
                                        xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
                                    >
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <defs></defs>
                                            <g id="Page-1" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage">
                                                <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-259.000000, -203.000000)" fill="#000000"> 
                                                    <path d="M282,211 L262,211 C261.448,211 261,210.553 261,210 C261,209.448 261.448,209 262,209 L282,209 C282.552,209 283,209.448 283,210 C283,210.553 282.552,211 282,211 L282,211 Z M281,231 C281,232.104 280.104,233 279,233 L265,233 C263.896,233 263,232.104 263,231 L263,213 L281,213 L281,231 L281,231 Z M269,206 C269,205.447 269.448,205 270,205 L274,205 C274.552,205 275,205.447 275,206 L275,207 L269,207 L269,206 L269,206 Z M283,207 L277,207 L277,205 C277,203.896 276.104,203 275,203 L269,203 C267.896,203 267,203.896 267,205 L267,207 L261,207 C259.896,207 259,207.896 259,209 L259,211 C259,212.104 259.896,213 261,213 L261,231 C261,233.209 262.791,235 265,235 L279,235 C281.209,235 283,233.209 283,231 L283,213 C284.104,213 285,212.104 285,211 L285,209 C285,207.896 284.104,207 283,207 L283,207 Z M272,231 C272.552,231 273,230.553 273,230 L273,218 C273,217.448 272.552,217 272,217 C271.448,217 271,217.448 271,218 L271,230 C271,230.553 271.448,231 272,231 L272,231 Z M267,231 C267.552,231 268,230.553 268,230 L268,218 C268,217.448 267.552,217 267,217 C266.448,217 266,217.448 266,218 L266,230 C266,230.553 266.448,231 267,231 L267,231 Z M277,231 C277.552,231 278,230.553 278,230 L278,218 C278,217.448 277.552,217 277,217 C276.448,217 276,217.448 276,218 L276,230 C276,230.553 276.448,231 277,231 L277,231 Z" id="trash" sketch:type="MSShapeGroup"></path> 
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                            </li>

                        @endforeach
                    </ul>
                </div>
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
                    <a class="base-button" href="{{ route('catalog.cart.checkout') }}">Перейти к оформлению</a>
                    <p class="mt-3">Нажимая на кнопку вы даете согласие на</p>
                    <div class="link-policy">
                        <a href="#">обработку персональных данных</a>
                    </div>

                </div>
            </aside>
        </div>

        {{-- <div class="promo-section-wrap h-container">
            <div class="promo-section">
                <form class="promo-item input-group mb-3">
                    <input type="text" class="form-control" placeholder="Введите промокод" aria-label="Поле ввода">
                    <div class="apply-button">
                        <button class="btn" type="button">Применить</button>
                    </div>
                </form>
                
                <form class="promo-item input-group mb-3">
                    <input type="text" class="form-control" placeholder="Введите сертификат" aria-label="Поле ввода">
                    <div class="apply-button">
                        <button class="btn" type="button">Применить</button>
                    </div>
                </form>
                
            </div>
        </div> --}}

    @else

        <div class="cart-empty-wrap h-container">
            <!-- Start Empty Cart -->
            <div class="cart-empty">
                <h3 class="text-center">Ваша корзина пуста!</h3>
                <img src="{{ asset('assets/images/empty-cart.svg') }}" alt="">
                <p class="text-center">Положите сюда что-нибудь, чтобы корзине было не так одиноко</p>
                <a href="{{ route('home') }}">Перейти к покупкам</a>
            </div>
            <!-- End Empty Cart -->
        </div>

    @endif

 </div>

<!-- End Cart page content -->