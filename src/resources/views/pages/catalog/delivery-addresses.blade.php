@extends('layouts.main')

@push('styles')

<link rel="stylesheet" href="{{ asset('assets/css/personal-addresses.css') }}" />

@endpush


@section('content')


<!-- Start order account -->
<div class="the-personal">
    <div class="the-personal__inner">
      <x-account-sidebar />
      <main class="the-personal__main">
        <section class="the-personal-addresses">
          <div class="the-personal-addresses__inner">
            @if ($addresses->count() > 0)
                @foreach($addresses as $address)
                    <div class="the-personal-addresses__card">
                    <div
                        class="the-personal-addresses-card the-personal-addresses-card--shadow"
                    >
                        <div class="the-personal-addresses-card__head">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="the-personal-icon icon-address"
                        >
                            <path
                            d="M17.77 4.2l-5-1.66h-.54L7.5 4.17 2.77 2.54a.83.83 0 00-1 .41.83.83 0 00-.1.38V15a.83.83 0 00.56.8l5 1.66c.17.05.35.05.52 0l4.75-1.59 4.73 1.63a1 1 0 00.27 0c.17 0 .34-.05.48-.16a.83.83 0 00.35-.67V5a.83.83 0 00-.56-.8zM6.67 15.5l-3.34-1.1V4.5l3.34 1.1v9.9zm5-1.1l-3.34 1.1V5.6l3.34-1.1v9.9zm5 1.1l-3.34-1.1V4.5l3.34 1.1v9.9z"
                            fill="#555770"
                            ></path>
                        </svg>
                        <span>Данные адреса</span>
                        </div>
                        
                        <form class="the-personal-addresses-card__form" method="POST" action="{{ route('account.addresses.update', ['user_id' => request()->user()->id, 'id' => 1]) }}">
                            @csrf
                            @method('PUT')
                            <div class="the-personal-addresses-card__label">
                                <div class="address-city">{{ $address->city }}</div>
                            </div>
                            <label class="the-personal-addresses-card__label"
                                ><input
                                    type="text"
                                    placeholder="Улица"
                                    required
                                    readonly="readonly"
                                    tabindex="-1"
                                    name="street"
                                    class="the-personal-addresses-card__input @error('street') is_invalid @enderror"
                                    value="{{ $address->street }}" />
                                @error('street') <small style="color: red">{{ $message }}</small> @enderror
                            </label>
                            <label class="the-personal-addresses-card__label">
                                <input
                                    type="text"
                                    placeholder="Дом, строение, корпус"
                                    readonly="readonly"
                                    name="building"
                                    required
                                    tabindex="-1"
                                    class="the-personal-addresses-card__input @error('building') is_invalid @enderror"
                                    value="{{ $address->building }}" />
                                @error('building') <small style="color: red">{{ $message }}</small> @enderror
                            </label>
                            <label class="the-personal-addresses-card__label"
                                ><input
                                type="text"
                                name="apartment"
                                placeholder="Квартира, офис"
                                readonly="readonly"
                                tabindex="-1"
                                class="the-personal-addresses-card__input @error('apartment') is_invalid @enderror"
                                value="{{ $address->apartment ?? '-' }}" />
                                @error('apartment') <small style="color: red">{{ $message }}</small> @enderror
                            </label>
                            <button class="the-personal-addresses-card__edit outline" type="button">
                                Редактировать
                            </button>
                            <button class="the-personal-button outline the-personal-button--v1" type="submit" style="display: none;"> Сохранить изменения </button>
                            <form action="{{ route('account.addresses.delete', ['user_id' => request()->user()->id, 'id' => 1]) }}" class="delete-form" method="POST">
                                @csrf @method('DELETE')
                                <button class="the-personal-addresses-card__delete outline" >
                                    <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="the-personal-icon icon-delete"
                                    width="24"
                                    height="24"
                                    >
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M6 6a1 1 0 011 1v11a1 1 0 001 1h8a1 1 0 001-1V7a1 1 0 112 0v11a3 3 0 01-3 3H8a3 3 0 01-3-3V7a1 1 0 011-1z"
                                        fill="#C7C9D9"
                                    ></path>
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M9 9a1 1 0 011 1v7a1 1 0 11-2 0v-7a1 1 0 011-1zm3 0a1 1 0 011 1v7a1 1 0 11-2 0v-7a1 1 0 011-1zm3 0a1 1 0 011 1v7a1 1 0 11-2 0v-7a1 1 0 011-1zm5-1H4V6h16v2z"
                                        fill="#C7C9D9"
                                    ></path>
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M9 4a1 1 0 011-1h4a1 1 0 011 1v2a1 1 0 11-2 0V5h-2v1a1 1 0 11-2 0V4z"
                                        fill="#C7C9D9"
                                    ></path>
                                    </svg>
                                </button>
                            </form>
                        </form>
                        </div>
                    </div>
                @endforeach
            @endif
            {{-- <div class="the-personal-addresses__card">
              <div class="the-personal-addresses-new">
                <button
                  class="the-personal-addresses-new__icon outline"
                ></button>
                <div class="transition-container">
                  <div class="the-personal-addresses-new__head">
                    Добавить новый адрес
                  </div>
                </div>
                <form class="the-personal-addresses-new__form">
                  <div class="transition-container" style="display: none">
                    <div class="the-personal-addresses-card">
                      <div class="the-personal-addresses-card__head">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="the-personal-icon icon-address"
                          style="display: none"
                        >
                          <use
                            xlink:href="/static/assets/profile/icons/sprites.svg#address"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                          ></use>
                        </svg>
                        <label class="the-personal-addresses-card__label"
                          ><input
                            type="text"
                            placeholder="Название"
                            tabindex="0"
                            class="the-personal-addresses-card__input"
                        /></label>
                      </div>
                      <div class="the-personal-addresses-card__form">
                        <div class="the-personal-addresses-card__label">
                          <input
                            type="text"
                            placeholder="Регион, город"
                            tabindex="0"
                            class="the-personal-addresses-card__input"
                          />
                          <ul
                            class="the-personal-addresses-card__cities-list"
                            style="display: none"
                          ></ul>
                        </div>
                        <label class="the-personal-addresses-card__label"
                          ><input
                            type="text"
                            placeholder="Улица"
                            tabindex="0"
                            class="the-personal-addresses-card__input" /></label
                        ><label class="the-personal-addresses-card__label"
                          ><input
                            type="text"
                            placeholder="Дом, строение, корпус"
                            tabindex="0"
                            class="the-personal-addresses-card__input" /></label
                        ><label class="the-personal-addresses-card__label"
                          ><input
                            type="text"
                            placeholder="Квартира, офис"
                            tabindex="0"
                            class="the-personal-addresses-card__input" /></label
                        ><button
                          disabled
                          class="the-personal-button outline the-personal-button--v1"
                        >
                          Сохранить новый адрес
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div> --}}
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
        const deleteForms = document.querySelectorAll('.delete-form');

        deleteForms.forEach(form => {
            const deleteBtn = document.querySelector('.the-personal-addresses-card__delete')

            deleteBtn.addEventListener('click', e => {
                e.preventDefault();
                form.submit();
            })
        });

      $(".the-personal-addresses-new__icon").click(function () {
        $(".the-personal-addresses-new__icon").toggleClass("opened");
        $(".transition-container").slideToggle(200);
      });

      $(".the-personal-addresses-card__edit").on('click', function() {
        console.log('test')
        $(this).parent().find('input').removeAttr('readonly').end();
        $(this).parent().prev().find('input').removeAttr('readonly').end();
        $(".the-personal-addresses-card__delete").hide();
        $(this).hide();
        $(this).next(".the-personal-button").show();
      })

      document
        .querySelectorAll(".the-personal-addresses-card__form")
        .forEach(formCheck);

        document
        .querySelectorAll(".the-personal-addresses-new__form")
        .forEach(formCheck);

      function formCheck(form) {
        const inputs = form.querySelectorAll("input");
        const button = form.querySelector("button");

        inputs.forEach((input) => {
          if (input.value === "") button.setAttribute("disabled", "true");
          let flag = false;
          input.addEventListener("input", (event) => {
            flag = false;
            for (const item of inputs) {
              if (item.value === "") {
                flag = true;
                break;
              }
            }
            if (flag) button.setAttribute("disabled", "true");
            else button.removeAttribute("disabled");
          });
        });
      }
    });
</script>

@endpush