@extends('layouts.main')

@section('content')
@if ($user)
<!-- Start personal account -->
<div class="the-personal">
    <div class="the-personal__inner">
      <div class="the-personal__side">
        <div class="the-personal-navigation">
          <div class="the-personal-navigation__title">
            Мои данные
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 24"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.3 7.3a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-4 4a1 1 0 0 1-1.4-1.4L8.58 12l-3.3-3.3a1 1 0 0 1 0-1.4Z" fill="#555770" /></svg>
          </div>
          <ul class="the-personal-navigation__list">
            <li class="the-personal-navigation__item">
              <a
                href="#"
                class="the-personal-navigation__link the-personal-navigation__link--active"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  stroke-width="0"
                >
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M10.333 6.333a2.333 2.333 0 11-4.666 0 2.333 2.333 0 014.666 0zM9 6.333a1 1 0 11-2 0 1 1 0 012 0z"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M8 14.667A6.667 6.667 0 108 1.333a6.667 6.667 0 000 13.334zm0-1.334a5.31 5.31 0 002.583-.666 2.668 2.668 0 00-5.166 0A5.31 5.31 0 008 13.333zm0-4a4.001 4.001 0 013.709 2.5 5.333 5.333 0 10-7.418 0A4.001 4.001 0 018 9.333z"
                  ></path>
                </svg>

                <span>Мои данные</span>
              </a>
            </li>
            <li class="the-personal-navigation__item">
              <a href="#" class="the-personal-navigation__link">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  stroke-width="0"
                >
                  <path
                    d="M4 5.333c0-.368.298-.666.667-.666h4a.667.667 0 010 1.333h-4A.667.667 0 014 5.333zm.667 2a.667.667 0 000 1.334h4a.667.667 0 000-1.334h-4zM4 10.707c0-.368.298-.667.667-.667h2a.667.667 0 010 1.333h-2A.667.667 0 014 10.707z"
                  ></path>
                  <path
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                    d="M2.667 1.333c-.772 0-1.334.651-1.334 1.373v9.882c0 1.112.86 2.079 2 2.079h9.334a2 2 0 002-2v-4c0-.736-.598-1.334-1.334-1.334H12V2.706c0-.722-.562-1.373-1.333-1.373h-8zm7.988 1.334H2.678s-.011 8.177-.011 9.921c0 .449.333.745.666.745h7.447a2 2 0 01-.113-.666c0-3.339-.002-6.662-.012-10zm2.012 10.666a.666.666 0 00.666-.666v-4H12v4c0 .368.298.666.667.666z"
                  ></path>
                </svg>

                <span>Мои заказы</span>
              </a>
            </li>
            <li class="the-personal-navigation__item">
              <a href="#" class="the-personal-navigation__link">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 16 16"
                  stroke-width="0"
                >
                  <path
                    d="M8 13.933l3.3-3.3a4.666 4.666 0 001.011-5.085A4.667 4.667 0 104.7 10.633l3.3 3.3zm0 1.886l-4.243-4.243a6 6 0 118.486 0L8 15.819zm0-7.152A1.333 1.333 0 108 6a1.333 1.333 0 000 2.667zM8 10a2.667 2.667 0 110-5.333A2.667 2.667 0 018 10z"
                  ></path>
                </svg>

                <span>Мои адреса</span>
              </a>
            </li>
            <li class="the-personal-navigation__item">
              <button class="the-personal-navigation__link">
                <svg viewBox="0 0 21 21" xmlns="http://www.w3.org/2000/svg">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g
                    id="SVGRepo_tracerCarrier"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.722"
                  >
                    <g
                      fill="none"
                      fill-rule="evenodd"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      transform="matrix(-1 0 0 1 18 3)"
                    >
                      <path d="m10.595 10.5 2.905-3-2.905-3"></path>
                      <path d="m13.5 7.5h-9"></path>
                      <path
                        d="m10.5.5-8 .00224609c-1.1043501.00087167-1.9994384.89621131-2 2.00056153v9.99438478c.0005616 1.1043502.8956499 1.9996898 2 2.0005615l8 .0022461"
                      ></path>
                    </g>
                  </g>
                  <g id="SVGRepo_iconCarrier">
                    <g
                      fill="none"
                      fill-rule="evenodd"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      transform="matrix(-1 0 0 1 18 3)"
                    >
                      <path d="m10.595 10.5 2.905-3-2.905-3"></path>
                      <path d="m13.5 7.5h-9"></path>
                      <path
                        d="m10.5.5-8 .00224609c-1.1043501.00087167-1.9994384.89621131-2 2.00056153v9.99438478c.0005616 1.1043502.8956499 1.9996898 2 2.0005615l8 .0022461"
                      ></path>
                    </g>
                  </g>
                </svg>

                <span>Выйти</span>
              </button>
            </li>
          </ul>
        </div>
      </div>
      <div class="the-personal__main">
        <div class="the-personal-data">
          <div class="the-personal-user-card">
            <div class="the-personal-user-card__header">
              <div class="the-personal-user-card__photo">
                <!-- todo Вместо .the-personal-user-avatar просто поставить img -->
                <div class="the-personal-user-avatar">
                  <div class="the-personal-user-avatar__text">{{ $user->name }}</div>
                </div>
              </div>
              <div>
                <div class="the-personal-user-card__name">{{ $user->name }}</div>
                <form>
                  <label class="the-personal-user-card__edit"
                    ><input
                      type="file"
                      name="photo"
                      accept=".png, .jpg, .jpeg"
                      class="the-personal-user-card__edit-input visually-hidden"
                    /><span class="the-personal-user-card__edit-text">
                      Редактировать фото профиля
                    </span></label
                  >
                </form>
              </div>
            </div>
            <form class="the-personal-user-card__form">
              <div class="the-personal-user-card__col">
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption">Имя</span
                  ><label
                    class="the-personal-input the-personal-user-card__input"
                    ><input
                      name="name"
                      type="text"
                      placeholder=" "
                      class="the-personal-input__field"
                      value="{{ $user->name }}"
                      required
                    /><span class="the-personal-input__error"
                      >Поле обязательно для заполнения</span
                    ></label
                  >
                </div>
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption">Фамилия</span
                  ><label
                    class="the-personal-input the-personal-user-card__input"
                    ><input
                      type="text"
                      placeholder=" "
                      class="the-personal-input__field"
                      value="{{ $user->last_name ?? $user->name }}"
                      required
                    /><span class="the-personal-input__error"
                      >Поле обязательно для заполнения</span
                    ></label
                  >
                </div>
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption centered"
                    >Дата рождения</span
                  >
                  <span class="the-personal-user-card__group" style="display: none;">
                    <!-- Todo: день -->
                    <div
                      class="custom-select the-personal-select the-personal-user-card__select the-personal-select--lg"
                    >
                      <div
                        tabindex="0"
                        class="selected-text the-personal-select__name outline"
                      >
                        <input type="hidden" name="day" />
                        <span> 1 </span>
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
                      <div
                        class="select-items the-personal-select__dropdown hidden"
                      >
                        <div tabindex="0" class="the-personal-select__item">
                          1
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          3
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          4
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          5
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          6
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          7
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          8
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          9
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          10
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          11
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          12
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          13
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          14
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          15
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          16
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          17
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          18
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          19
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          20
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          21
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          22
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          23
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          24
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          25
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          26
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          27
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          28
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          29
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          30
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          31
                        </div>
                      </div>
                    </div>
                    <!-- Todo: месяц -->
                    <div
                      class="custom-select the-personal-select the-personal-user-card__select the-personal-select--lg"
                    >
                      <div
                        tabindex="0"
                        class="selected-text the-personal-select__name outline"
                      >
                        <input type="hidden" name="mounth" />
                        <span> января </span>
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
                      <div
                        class="select-items the-personal-select__dropdown hidden"
                      >
                        <div
                          tabindex="0"
                          class="the-personal-select__item the-personal-select__item--selected"
                        >
                          января
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          февраля
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          марта
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          апреля
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          мая
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          июня
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          июля
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          августа
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          сентября
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          октября
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          ноября
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          декабря
                        </div>
                      </div>
                    </div>
                    <!-- Todo: год -->
                    <div
                      class="custom-select the-personal-select the-personal-user-card__select the-personal-select--lg"
                    >
                      <div
                        tabindex="0"
                        class="selected-text the-personal-select__name outline"
                      >
                        <input type="hidden" name="year" />
                        <span> 1900 </span>
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
                      <div
                        class="select-items the-personal-select__dropdown hidden"
                      >
                        <div tabindex="0" class="the-personal-select__item">
                          1900
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1901
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1902
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1903
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1904
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1905
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1906
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1907
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1908
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1909
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1910
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1911
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1912
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1913
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1914
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1915
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1916
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1917
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1918
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1919
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1920
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1921
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1922
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1923
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1924
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1925
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1926
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1927
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1928
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1929
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1930
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1931
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1932
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1933
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1934
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1935
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1936
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1937
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1938
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1939
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1940
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1941
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1942
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1943
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1944
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1945
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1946
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1947
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1948
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1949
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1950
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1951
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1952
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1953
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1954
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1955
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1956
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1957
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1958
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1959
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1960
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1961
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1962
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1963
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1964
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1965
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1966
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1967
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1968
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1969
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1970
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1971
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1972
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1973
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1974
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1975
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1976
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1977
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1978
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1979
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1980
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1981
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1982
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1983
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1984
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1985
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1986
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1987
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1988
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1989
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1990
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1991
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1992
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1993
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1994
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1995
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1996
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1997
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1998
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          1999
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2000
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2001
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2002
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2003
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2004
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2005
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2006
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2007
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2008
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2009
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2010
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2011
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2012
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2013
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2014
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2015
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2016
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2017
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2018
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2019
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2020
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2021
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2022
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2023
                        </div>
                        <div tabindex="0" class="the-personal-select__item">
                          2024
                        </div>
                      </div>
                    </div></span
                  >

                  <button class="the-personal-user-card__birthday outline">
                    Не указана
                    <span class="the-personal-user-card__icon">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="the-personal-icon icon-info"
                      >
                        <path
                          d="M11.11 12.5a5.01 5.01 0 00-.26 1.8h1.99l.03-.5c.05-.52.28-.98.67-1.37l.63-.62c.5-.5.84-.95 1.04-1.35.2-.4.3-.84.3-1.3 0-1-.31-1.78-.92-2.33A3.65 3.65 0 0012.04 6c-1.1 0-1.95.29-2.58.87a3.17 3.17 0 00-.96 2.41h2.25c.01-.43.13-.76.36-1 .23-.25.54-.38.93-.38.8 0 1.2.46 1.2 1.37 0 .3-.07.58-.23.86-.15.27-.46.62-.94 1.06-.46.43-.78.86-.96 1.31zm-.14 3.39a1.2 1.2 0 00-.35.88c0 .36.12.65.34.88.24.23.54.35.92.35s.68-.12.9-.35c.24-.23.36-.52.36-.88s-.12-.65-.36-.88a1.21 1.21 0 00-.9-.36c-.37 0-.67.12-.9.36z"
                        ></path>
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M12 21a9 9 0 100-18 9 9 0 000 18zm0 1a10 10 0 100-20 10 10 0 000 20z"
                        ></path>
                      </svg>
                      <span class="the-personal-user-card__tooltip"
                        ><div
                          class="the-personal-tooltip the-personal-tooltip--left the-personal-tooltip--top"
                          style="width: 280px"
                        >
                          <svg
                            width="13"
                            height="9"
                            viewBox="0 0 13 9"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M6.5 9L0.0048101 0.749999L12.9952 0.75L6.5 9Z"
                              fill="white"
                            ></path>
                          </svg>
                          Дополнительная скидка в день рождения! <br />
                          Обращаем внимание, что дату рождения можно ввести
                          только один раз. Для изменения даты необходимо
                          написать в поддержку
                          <a href="mailto:bd@madrobots.ru">bd@madrobots.ru</a>
                        </div></span
                      ></span
                    ><span class="the-personal-user-card__notification">
                      Дополнительная скидка в день рождения! <br />
                      Обращаем внимание, что дату рождения можно ввести только
                      один раз. Для изменения даты необходимо написать в
                      поддержку
                      <a href="mailto:bd@madrobots.ru"
                        >bd@madrobots.ru</a
                      ></span
                    >
                  </button>
                </div>
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption centered"
                    >Пол</span
                  >
                  <div
                    class="custom-select the-personal-select the-personal-user-card__select the-personal-select--lg"
                  >
                    <div
                      tabindex="0"
                      class="selected-text the-personal-select__name outline"
                    >
                      <input type="hidden" name="gender" />
                      <span> Мужской </span>
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
                    <div
                      class="select-items the-personal-select__dropdown hidden"
                    >
                      <div
                        tabindex="0"
                        class="the-personal-select__item"
                        data-value="female"
                      >
                        Женский
                      </div>
                      <div
                        tabindex="0"
                        class="the-personal-select__item the-personal-select__item--selected"
                        data-value="male"
                      >
                        Мужской
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="the-personal-user-card__col">
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption">Почта</span
                  ><label
                    class="the-personal-input the-personal-user-card__input"
                    ><input
                      name="email"
                      type="email"
                      placeholder=" "
                      class="the-personal-input__field"
                      value="{{ $user->email }}"
                      required
                    /><span class="the-personal-input__error"
                      >Поле обязательно для заполнения</span
                    ></label
                  >
                </div>
                <div class="the-personal-user-card__row">
                  <span class="the-personal-user-card__caption">Телефон</span
                  ><label
                    class="the-personal-input the-personal-user-card__input"
                    ><input
                      name="phone"
                      type="tel"
                      placeholder=" "
                      id="phone"
                      class="the-personal-input__field"
                      data-mask="+7 (###) ###-##-##"
                      data-mask-inited="true"
                      data-mask-raw-value=""
                      value="{{ $user->phone }}"
                      required
                    /><span class="the-personal-input__error"
                      >Поле обязательно для заполнения</span
                    ></label
                  >
                </div>
                <button
                  class="the-personal-button outline the-personal-user-card__button the-personal-button--v1"
                  disabled="disabled"
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