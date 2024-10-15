@extends('layouts.main')

@section('content')
@if ($user)
<!-- Start personal account -->
<div class="the-personal">
    <div class="the-personal__inner">
      <x-account-sidebar />
      <div class="the-personal__main">
        <div class="the-personal-data">
          <div class="the-personal-user-card">
            <div class="the-personal-user-card__header">
              <div class="the-personal-user-card__photo">
                <!-- todo Вместо .the-personal-user-avatar просто поставить img -->
                <div class="the-personal-user-avatar">
                  <div class="the-personal-user-avatar__text">{{ $user->name[0] ?? '' }}</div>
                </div>
              </div>
              <div>
                <div class="the-personal-user-card__name">{{ $user->getFullName() }}</div>
                {{-- <form>
                  <label class="the-personal-user-card__edit">
                    <input
                      type="file"
                      name="photo"
                      accept=".png, .jpg, .jpeg"
                      class="the-personal-user-card__edit-input visually-hidden"
                    />
                    <span class="the-personal-user-card__edit-text">
                      Редактировать фото профиля
                    </span>
                  </label>
                </form> --}}
              </div>
            </div>
            <form class="the-personal-user-card__form" method="POST" action="{{ route('account.update', $user->id) }}">
              @method('PUT')
              @csrf
              <div class="the-personal-user-card__col">
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption">Имя</span>
                  <label class="the-personal-input the-personal-user-card__input">
                    <input
                      id="userName"
                      name="name"
                      type="text"
                      placeholder=" "
                      class="the-personal-input__field user-data-input @error('name') is-invalid @enderror"
                      value="{{ $user->name }}"
                      required
                    />
                    @error('name') <span class="the-personal-input__error">{{ $message }}</span> @enderror
                  </label>
                </div>
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption">Фамилия</span>
                  <label class="the-personal-input the-personal-user-card__input">
                    <input
                      id="userLastName"
                      type="text"
                      placeholder=""
                      class="the-personal-input__field user-data-input @error('last_name') is-invalid @enderror"
                      value="{{ $user->last_name }}"
                      name="last_name"
                      required
                    />
                    @error('last_name') <span class="the-personal-input__error">{{ $message }}</span> @enderror
                  </label>
                </div>
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption centered">Дата рождения</span>
                  <span class="the-personal-user-card__group" @if(!$user->birthdate) style="display: none;" @endif>
                    <!-- Todo: день -->
                    <div class="custom-select day-select the-personal-select the-personal-user-card__select the-personal-select--lg">
                      <div tabindex="0" class="selected-text the-personal-select__name outline">
                        <input type="hidden" name="birthdate_parts[day]" class="user-data-input" value="{{ $user->birthdate?->format('d') ?? '1' }}" />
                        <span>{{ $user->birthdate?->format('d') ?? '1' }}</span>
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
                      <div class="select-items the-personal-select__dropdown hidden"></div>
                    </div>
                    <!-- Todo: месяц -->
                    <div class="custom-select the-personal-select month-select the-personal-user-card__select the-personal-select--lg">
                      <div tabindex="0" class="selected-text the-personal-select__name outline">
                        <input type="hidden" name="birthdate_parts[month]" class="user-data-input" value="{{ $user->birthdate?->format('n') ?? '1' }}" />
                        @php
                          $month = $user->birthdate?->format('n') ?? '1'; 
                          $monthKey = 'account.month.' . $month;
                        @endphp
                        <span>{{ __($monthKey) }}</span>
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
                      <div class="select-items the-personal-select__dropdown hidden"></div>
                    </div>
                    <!-- Todo: год -->
                    <div class="custom-select year-select the-personal-select the-personal-user-card__select the-personal-select--lg">
                      <div tabindex="0" class="selected-text the-personal-select__name outline">
                        <input type="hidden" name="birthdate_parts[year]" class="user-data-input" value="{{ $user->birthdate?->format('Y') ?? '1900' }}" />
                        <span>{{ $user->birthdate?->format('Y') ?? '1900' }}</span>
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
                      <div class="select-items the-personal-select__dropdown hidden"></div>
                    </div></span>
                  @if(!$user->birthdate)
                    <button class="the-personal-user-card__birthday outline">Не указана</button>
                  @endif
                </div>
              </div>
              <div class="the-personal-user-card__col">
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption">Почта</span>
                  <label class="the-personal-input the-personal-user-card__input">
                    <input
                      id="userEmail"
                      name="email"
                      type="email"
                      placeholder=" "
                      class="the-personal-input__field user-data-input @error('email') is_invalid @enderror"
                      value="{{ $user->email }}"
                    />
                    @error('email') <span class="the-personal-input__error">{{ $message }}</span> @enderror
                  </label>
                </div>
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption">Телефон</span>
                  <label class="the-personal-input the-personal-user-card__input">
                    <input
                      name="phone"
                      type="tel"
                      placeholder=" "
                      id="userPhone"
                      class="the-personal-input__field user-data-input @error('phone') is_invalid @enderror"
                      data-mask="+7 (###) ###-##-##"
                      data-mask-inited="true"
                      data-mask-raw-value=""
                      value="{{ $user->phone }}"
                      required
                    />
                    @error('phone') <span class="the-personal-input__error">{{ $message }}</span> @enderror
                  </label>
                </div>
                <button
                  type="submit"
                  class="data-save the-personal-button outline the-personal-user-card__button the-personal-button--v1"
                  disabled
                >
                  Сохранить изменения
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End personal account -->
@else
  <div class="alert alert-danger" role=alert>
    <h1>Нет данных</h1>
  </div>
@endif
@endsection

@push('scripts')
<script>
  $(document).ready(function () {
    $('#personal-accaunt-logout-btn').on('click', function (e) {
      e.preventDefault();
      $.ajax({
        url: "{{ route('account.logout') }}",
        method: 'GET',
        success: function (response) {
          window.location.href = '/';
        },
        error: function (xhr, status, error) {
          alert('Произошла ошибка при отправке запроса: ' + error);
        }
      });
    })
  });

  const daySelectOptions = document.querySelector('.day-select .select-items');
  const monthSelectOptions = document.querySelector('.month-select .select-items');
  const yearSelectOptions = document.querySelector('.year-select .select-items');

  if (daySelectOptions) {
    for (let i = 1; i <= 31; i++) {
      const option = document.createElement('div');
      option.classList.add('the-personal-select__item');
      option.setAttribute('tabindex', 0)
      option.setAttribute('data-value', i)
      option.textContent = i;
      daySelectOptions.appendChild(option);
    }
  }

  if (monthSelectOptions) {
    const months = @json(__('account.month'));

    for (let i = 1; i <= 12; i++) {
      const option = document.createElement('div');
      option.classList.add('the-personal-select__item');
      option.setAttribute('tabindex', 0)
      option.setAttribute('data-value', i)
      option.textContent = months[i];
      monthSelectOptions.appendChild(option);
    }
  }

  if (yearSelectOptions) {
    for (let i = 1900; i <= 2024; i++) {
      const option = document.createElement('div');
      option.classList.add('the-personal-select__item');
      option.setAttribute('tabindex', 0)
      option.setAttribute('data-value', i)
      option.textContent = i;
      yearSelectOptions.appendChild(option);
    }
  }

  const userDataInputs = document.querySelectorAll('.user-data-input');

  userDataInputs.forEach((input) => {
    input.addEventListener('input', function () {
      const saveBtn = document.querySelector('.data-save');

      if (this.value.trim() !== '') {
        saveBtn.removeAttribute('disabled');
      } else {
        saveBtn.setAttribute('disabled', '');
      }
    });
  })

  const userDataForm = document.querySelector('.the-personal-user-card__form');
  const userPhone = document.querySelector('#userPhone');

  userDataForm.addEventListener('submit', e => {
    e.preventDefault();

    userPhone.value = userPhone.value
      .replace('(', '')
      .replace(')', '')
      .split('-')
      .join('')
      .split(' ')
      .join('');

      userDataForm.submit();
  })

</script>
@endpush