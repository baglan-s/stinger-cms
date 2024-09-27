<div class="header-controls__item">
	<div class="hc-item-cart-control control-item outline @if ($hasProduct) is-active @endif">
		<svg
			xmlns="http://www.w3.org/2000/svg"
			viewBox="0 0 32 32"
			class="hc-control-item__icon"
			wire:click="toCart"
		>
			<path
			d="M0 2v4h4.306l1.66 9.967-1.927 9.64c-.027.134-.04.268-.039.401.003.682 0 1.294 0 1.992a4 4 0 0 0 8 0h8a4 4 0 1 0 4-4H8.44l.8-4H30V2H0Z"
			/>
		</svg>
		<span class="hc-control-item__name" wire:click="toCart">Корзина</span>
		@if ($hasProduct)

			<span class="hc-control-item__number">{{ $productCount }}</span>
			@if (!request()->routeIs('checkout.cart.index'))
				<div class="hc-control-item__dropdown">
					<div class="favorites-dropdown">
						<div class="favorites-dropdown__wrapper">
							<div class="favorites-dropdown__body">
								@foreach ($products as $product)
									<div class="header-favorites-product" wire:key="{{ $product->id }}">
										<div class="cart-product-modal-container">
											<a
												href="{{ route('catalog.products.show', $product->translation()?->slug ?? '-') }}"
												class="header-favorites-product__link"
											>
												<img
													alt=""
													src="{{ $product->getDefaultImage() }}"
													class="header-favorites-product__img"
												/>
												<div class="header-favorites-product__title">
													{{ $product->translation()?->name }} 
													<br>
													<span>{{ $product->quantity }} шт</span>
												</div>
												<div class="header-favorites-product-price">
													{{ $product->getPrice() }}&nbsp;<span class="currency-ruble">₸</span>
												</div>
											</a>
											<button
												class="header-favorites-product-delete-wrap outline"
												wire:click="removeFromCart('{{ $product->id }}', '{{ $product->quantity }}')"
											>
												<svg fill="#e91e63" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
													<path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/>
												</svg>
											</button>
										</div>
										
									</div>
								@endforeach
							</div>
							<div class="favorites-dropdown__footer">
								<div class="favorites-dropdown__total">
									<div class="favorites-dropdown__total-text">
										Товаров на сумму:
									</div>
									<div class="favorites-dropdown__total-number">
										{{ $totalPrice ?? 0 }} ₸
									</div>
								</div>
								<button
									class="favorites-dropdown__button btn-black"
									wire:click="toCart"
								>
									<svg
										xmlns="http://www.w3.org/2000/svg"
										class="base-button__additional-icon svg-icon svg-icon--external"
									>
										<use
											xlink:href="/legacy/sprite.svg?v=19052023#external_madrobots"
											xmlns:xlink="http://www.w3.org/1999/xlink"
										></use>
									</svg>
										Оформить заказ
									<span
										class="global-preloader is-small"
										style="display: none"
									><span class="global-preloader__box"></span
									></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			@endif
		@endif
	</div>
</div>