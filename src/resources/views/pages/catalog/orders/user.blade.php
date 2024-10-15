@extends('layouts.main')

@push('styles')

<link rel="stylesheet" href="{{ asset('assets/css/personal-orders.css') }}" />

@endpush

@section('content')
<!-- Start order account -->
<div class="the-personal">
    <div class="the-personal__inner">
        <x-account-sidebar />
        <main class="the-personal__main">
            <section class="the-personal-orders">
                <form class="the-personal-orders__select filter-status-form">
                    <div class="custom-select status-select the-personal-select the-personal-select--sm">
                        <div tabindex="0" class="selected-text the-personal-select__name outline">
                            <input type="hidden" name="filter[status]" />
                            <span class="status-selected"> Все заказы </span>
                            <svg
                                width="10"
                                height="6"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M.158.82A.783.783 0 011.263.66L5 3.5 8.737.66a.783.783 0 011.105.16.807.807 0 01-.158 1.12L5 5.5.316 1.94A.807.807 0 01.158.82z"
                                fill="#8F90A6"
                                ></path>
                            </svg>
                        </div>
                        <div class="select-items the-personal-select__dropdown hidden">
                            <div 
                                tabindex="0" 
                                data-value="active"
                                class="status-select-item the-personal-select__item @if(isset(request()->get('filter')['status']) && request()->get('filter')['status'] === 'active') the-personal-select__item--selected @endif"
                            >
                                Активные заказы
                            </div>
                            <div 
                                tabindex="0" 
                                data-value="canceled"
                                class="status-select-item the-personal-select__item @if(isset(request()->get('filter')['status']) && request()->get('filter')['status'] === 'canceled') the-personal-select__item--selected @endif"
                            >
                                Завершенные заказы
                            </div>
                            <div 
                                tabindex="0" 
                                data-value="all"
                                class="status-select-item the-personal-select__item @if(isset(request()->get('filter')['status']) && request()->get('filter')['status'] === 'all') the-personal-select__item--selected @endif"
                            >
                                Все заказы
                            </div>
                        </div>
                    </div>
                </form>
                <div class="the-personal-orders-table">
                    <div class="the-personal-orders-table__top">
                        <div class="the-personal-orders-table__cell">
                            <div class="the-personal-orders-table__head">Номер заказа</div>
                        </div>
                        <div class="the-personal-orders-table__cell">
                            <div class="the-personal-orders-table__head">Дата заказа</div>
                        </div>
                        <div class="the-personal-orders-table__cell">
                            <div class="the-personal-orders-table__head">Сумма заказа</div>
                        </div>
                        <div class="the-personal-orders-table__cell"></div>
                        <div class="the-personal-orders-table__cell">
                            <div class="the-personal-orders-table__head">Статус заказа</div>
                        </div>
                    </div>
                    <div class="the-personal-orders-table__order">
                        @if ($orders->count() > 0)
                            @foreach ($orders as $order)

                                <div tabindex="0" class="the-personal-orders-table__row" data-target="content{{ $order->id }}">
                                    <svg
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="the-personal-icon arrow-bottom icon-arrow"
                                        viewBox="0 0 12 12"
                                    >
                                        <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M4.32 10.84a.78.78 0 01-.16-1.1L7 6 4.16 2.26a.78.78 0 01.16-1.1.8.8 0 011.12.16L9 6l-3.56 4.68a.8.8 0 01-1.12.16z"
                                        ></path>
                                    </svg>
                                    <div class="the-personal-orders-table__cell">
                                        <span class="desktop-hidden">Номер</span>
                                        <div
                                            class="the-personal-orders-table__text the-personal-orders-table__text--icon"
                                        >
                                            <div class="the-personal-orders-table__site-name">
                                                <img
                                                    src="https://madrobots.ru/static/assets/profile/favicons/madrobots.png"
                                                    alt="Madrobots"
                                                    title="Madrobots"
                                                />
                                            </div>
                                            {{ $order->id }}
                                        </div>
                                    </div>
                                    <div class="the-personal-orders-table__cell">
                                        <span class="desktop-hidden">Дата</span>
                                        <div class="the-personal-orders-table__text">{{ date('d.m.Y H:i:s', strtotime($order->created_at)) }}</div>
                                    </div>
                                    <div class="the-personal-orders-table__cell">
                                        <span class="desktop-hidden">Сумма</span>
                                        <div class="the-personal-orders-table__text">
                                            <span class="base-price">
                                                {{ $order->items->sum('total') }}&nbsp;
                                                <span class="base-price__currency">₸</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="the-personal-orders-table__cell mobile-hidden"></div>
                                    <div class="the-personal-orders-table__cell">
                                        <span class="desktop-hidden">Статус</span>
                                        <div class="the-personal-orders-table__status">{{ $order->status->translation()?->name }}</div>
                                    </div>
                                    <div class="the-personal-orders-table__link desktop-hidden">Подробнее о заказе</div>
                                </div>
                                <div class="transition-container" style="display: none" id="content{{ $order->id }}">
                                    <div class="the-personal-orders-table__detail">
                                        <div class="the-personal-orders-products">
                                            <header class="the-personal-orders-products__head">
                                                <div class="the-personal-orders-products__cell">
                                                    <div class="the-personal-orders-products__title">Товар</div>
                                                </div>
                                                <div class="the-personal-orders-products__cell">
                                                    <div class="the-personal-orders-products__title">Цена</div>
                                                </div>
                                                <div class="the-personal-orders-products__cell">
                                                    <div class="the-personal-orders-products__title">Скидка</div>
                                                </div>
                                                <div class="the-personal-orders-products__cell">
                                                    <div class="the-personal-orders-products__title">Количество</div>
                                                </div>
                                                <div class="the-personal-orders-products__cell">
                                                    <div class="the-personal-orders-products__title">Сумма</div>
                                                </div>
                                            </header>
                                            @foreach ($order->items as $item)
                                                <div class="the-personal-orders-products__row">
                                                    <div class="the-personal-orders-products__cell">
                                                        <a href="{{ route('catalog.products.show', $item->product_id) }}" class="the-personal-orders-products__link">
                                                            <div class="the-personal-orders-products__image">
                                                                <img src="{{ $item->product->getDefaultImage() }}" alt="" />
                                                            </div>
                                                            <div class="the-personal-orders-products__name">{{ $item->product->translation()?->name }}</div>
                                                        </a>
                                                    </div>
                                                    <div class="the-personal-orders-products__cell">
                                                        <span class="desktop-hidden">Цена</span>
                                                        <div class="the-personal-orders-products__text">
                                                            <span class="base-price">
                                                                {{ $item->cost }}&nbsp;
                                                                <span class="base-price__currency">₸</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="the-personal-orders-products__cell">
                                                        <span class="desktop-hidden">Скидка</span>
                                                        <div class="the-personal-orders-products__text">
                                                            @if ($item->discount > 0)
                                                                <div class="the-personal-orders-products__discount">{{ $item->discount }}%</div>
                                                            @else
                                                                0
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="the-personal-orders-products__cell">
                                                        <span class="desktop-hidden">Количество</span>
                                                        <div class="the-personal-orders-products__text">{{ $item->quantity }}</div>
                                                    </div>
                                                    <div class="the-personal-orders-products__cell">
                                                        <span class="desktop-hidden">Сумма</span>
                                                        <div class="the-personal-orders-products__text accent">
                                                            <span class="base-price">
                                                                {{ $item->total }}&nbsp;
                                                                <span class="base-price__currency">₸</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="the-personal-orders-detail">
                                            <div class="the-personal-orders-detail__head">
                                                <div class="the-personal-orders-detail__title">Данные получателя</div>
                                            </div>
                                            <div class="the-personal-orders-detail__inner">
                                                <div class="the-personal-orders-detail__item">
                                                    <div class="the-personal-orders-detail__key">ФИО:</div>
                                                    <div class="the-personal-orders-detail__value">{{ $order->has_receiver ? $order->receiver_name . ' ' . $order->receiver_lastname : $order->user->getFullName()}}</div>
                                                </div>
                                                <div class="the-personal-orders-detail__item">
                                                    <div class="the-personal-orders-detail__key">Почта:</div>
                                                    <div class="the-personal-orders-detail__value">{{ $order->has_receiver ? $order->receiver_email : $order->user->email}}</div>
                                                </div>
                                                <div class="the-personal-orders-detail__item">
                                                    <div class="the-personal-orders-detail__key">Телефон:</div>
                                                    <div class="the-personal-orders-detail__value">{{ $order->has_receiver ? $order->phone : $order->user->phone}}</div>
                                                </div>
                                                @if (!$order->is_delivery)
                                                    <div class="the-personal-orders-detail__item">
                                                        <div class="the-personal-orders-detail__key">Пункт самовывоза:</div>
                                                        <div class="the-personal-orders-detail__value">{{ $order->store->translation()?->name }}</div>
                                                    </div>
                                                @endif
                                                @if ($order->payments->count() > 0)
                                                    <div class="the-personal-orders-detail__item">
                                                        <div class="the-personal-orders-detail__key">Способ оплаты:</div>
                                                        <div class="the-personal-orders-detail__value">{{ $order->payments->first()?->type?->translation()?->name}}</div>
                                                    </div>
                                                    @if ($order->check_link)
                                                    <div class="the-personal-orders-detail__item">
                                                        <div class="the-personal-orders-detail__key">Чек:</div>
                                                        <a href="{{ $order->check_link }}" target="_blank" class="the-personal-orders-detail__value">Скачать</div>
                                                    </div>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                        @if ($order->is_delivery)
                                            <div class="the-personal-orders-detail">
                                                <div class="the-personal-orders-detail__head">
                                                    <div class="the-personal-orders-detail__title">Доставка</div>
                                                </div>
                                                <div class="the-personal-orders-detail__inner">
                                                    <div class="the-personal-orders-detail__item">
                                                        <div class="the-personal-orders-detail__key">Тип доставки:</div>
                                                        <div class="the-personal-orders-detail__value">{{ $order->delivery_company ?? 'CDEK' }}</div>
                                                    </div>
                                                    {{-- <div class="the-personal-orders-detail__item">
                                                        <div class="the-personal-orders-detail__key">Сумма:</div>
                                                        <div class="the-personal-orders-detail__value">240 ₽</div>
                                                    </div> --}}
                                                    <div class="the-personal-orders-detail__item">
                                                        <div class="the-personal-orders-detail__key">Способ оплаты:</div>
                                                        <div class="the-personal-orders-detail__value">Банковской картой на сайте</div>
                                                    </div>
                                                    <div class="the-personal-orders-detail__item">
                                                        <div class="the-personal-orders-detail__key">Адрес:</div>
                                                        <div class="the-personal-orders-detail__value">{{ $order->deliveryAddress->getFullAddress() }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        {{-- <div class="the-personal-orders-detail">
                                            <div class="the-personal-orders-detail__head">
                                                <div class="the-personal-orders-detail__title">
                                                История обработки заказа
                                                </div>
                                            </div>
                                            <div
                                                class="the-personal-orders-detail__inner the-personal-orders-detail__inner--block"
                                            >
                                                <div class="the-personal-orders-detail__item">
                                                    <div class="the-personal-orders-detail__key">
                                                        19.08.2024 09:26
                                                    </div>
                                                    <div class="the-personal-orders-detail__value">
                                                        Заказ отменен
                                                    </div>
                                                </div>
                                                <div class="the-personal-orders-detail__item">
                                                    <div class="the-personal-orders-detail__key">
                                                        16.08.2024 15:44
                                                    </div>
                                                    <div class="the-personal-orders-detail__value">
                                                        Ожидает подтверждения
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>

                            @endforeach

                        @else
                            <div class="the-personal-orders-table__row is-empty-state">
                                <div class="the-personal-orders-table__cell">
                                Нет активных заказов
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>
  <!-- End order account -->
    
@endsection

@push('scripts')

<script>
    $(document).ready(() => {
      $(".the-personal-orders-table__row").click(function () {
        $(this).toggleClass("opened");
        $('#' + $(this).data('target')).slideToggle(200);
      });

      const selectedStatusText = $('.status-select-item.the-personal-select__item--selected').text();

      if (selectedStatusText && selectedStatusText != '') {
          $('.status-selected').text(selectedStatusText);
      }

      const filterStatusForm = document.querySelector('.filter-status-form');

      $('.status-select-item').click(function () {
        filterStatusForm.submit();
      })

    });
</script>

@endpush