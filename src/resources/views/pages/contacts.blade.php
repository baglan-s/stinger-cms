@extends('layouts.main')

@section('content')

<!-- Start contacts page block-->
<section class="contacts_page_block">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="page_title">Контакты</h1>
            </div>
            <div class="row">

                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="contacts_page">
                            <div class="contacts-employee">
                                <img src="{{ asset('assets/images/contacts/kuznetsov.jpg') }}" class="roundeds" alt="Foto">
                                <p class="contacts-employee_text">Михаил Кузнецов <br> <span>Сотрудничество</span></p>
                            </div>
                            <p class="contacts_post">Почта: <a href="">mk@madrobots.ru</a></p>
                            <p class="contacts_telegran">Telegram: <a href="">@micoud</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="contacts_page">
                            <div class="contacts-employee">
                                <img src="{{ asset('assets/images/contacts/kulagina.jpg') }}" class="roundeds" alt="Foto">
                                <p class="contacts-employee_text">Лидия Кулагина <br> <span>Аксессуары Zavtra</span></p>
                            </div>
                            <p class="contacts_post">Почта: <a href="">lk@zavtra.co</a></p>
                            <p class="contacts_telegran">Telegram: <a href="">@fraugud</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="contacts_page">
                            <div class="contacts-employee">
                                <img src="{{ asset('assets/images/contacts/semlev.jpg') }}" class="roundeds" alt="Foto">
                                <p class="contacts-employee_text">Алексей Семлев <br> <span>Ассортимент и закупки</span>
                                </p>
                            </div>
                            <p class="contacts_post">Почта: <a href="">semlev@madrobots.ru</a></p>
                            <p class="contacts_telegran">Telegram: <a href=""></a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="contacts_page">
                            <div class="contacts-employee">
                                <img src="{{ asset('assets/images/contacts/kitova (2).jpg') }}" class="roundeds" alt="Foto">
                                <p class="contacts-employee_text">Елена Китова <br> <span>Корпоративные заказы и
                                        подарки</span></p>
                            </div>
                            <p class="contacts_post">Почта: <a href="">corp@madrobots.ru</a></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mb-4">
                        <div class="contacts_page">
                            <div class="contacts-employee">
                                <img src="{{ asset('assets/images/contacts/payment.jpg') }}" class="roundeds" alt="Foto">
                                <p class="contacts-employee_text"><span>Оплата интернет-заказов по безналичному расчёту</span>
                                </p>
                            </div>
                            <p class="contacts_post">Почта: <a href=""> invoice@madrobots.ru</a></p>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1 class="contacts_shops_title">Магазины</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="contacts_shops_page">
                            <div class="the_shop_location">
                                <h4 class="the_shop_location_title">Флагманский магазин в Москве </h4>
                                <img src="https://cdn-icons-png.flaticon.com/128/7987/7987350.png"
                                    class="the_shop_location_icon" alt="">
                            </div>
                            <div class="contacts-store__table">
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Адрес:</div>
                                    <div class="contacts-store__cell">Москва, Бутырский Вал, 32</div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Время работы:</div>
                                    <div class="contacts-store__cell">Ежедневно.10:00–22:00 (МСК)</div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Телефон:</div>
                                    <div class="contacts-store__cell"><a href="">+7 495 646-10-96</a></div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Почта:</div>
                                    <div class="contacts-store__cell"><a href="">flagman@madrobots.ru</a></div>
                                </div>
                            </div>
                            <a href="#" class="item-getintouch__button">Как добраться</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="contacts_shops_page-1">
                            <div class="the_shop_location">
                                <h4 class="the_shop_location_title">Магазин в Санкт-Петербурге</h4>
                            </div>
                            <div class="contacts-store__table">
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Адрес:</div>
                                    <div class="contacts-store__cell">Санкт-Петербург, Лиговский проспект, 3/9
                                    </div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Время работы:</div>
                                    <div class="contacts-store__cell">Ежедневно.10:00–22:00</div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Телефон:</div>
                                    <div class="contacts-store__cell"><a href="">+7 812 407-35-98</a></div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Почта:</div>
                                    <div class="contacts-store__cell"><a href="">fspb@madrobots.ru</a></div>
                                </div>
                            </div>
                            <a href="#" class="item-getintouch__button">Как добраться</a>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="contacts_shops_page-2">
                            <div class="the_shop_location">
                                <h4 class="the_shop_location_title">Магазин в Екатеринбурге</h4>
                            </div>
                            <div class="contacts-store__table">
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Адрес:</div>
                                    <div class="contacts-store__cell">
                                        Екатеринбург, ул. Горького, 33А
                                    </div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Время работы:</div>
                                    <div class="contacts-store__cell">Ежедневно.10:00–22:00</div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Телефон:</div>
                                    <div class="contacts-store__cell"><a href="">+7 343 363-33-16</a></div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Почта:</div>
                                    <div class="contacts-store__cell"><a href="">ekb@madrobots.ru</a></div>
                                </div>
                            </div>
                            <a href="#" class="item-getintouch__button">Как добраться</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="contacts_shops_page-3">
                            <div class="the_shop_location">
                                <h4 class="the_shop_location_title">Интернет-магазин</h4>
                            </div>
                            <div class="contacts-store__table">
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Время работы:</div>
                                    <div class="contacts-store__cell">
                                        ПН-ПТ: 9:00–21:00 <br> СБ, ВС: 10:00–20:00 (МСК)
                                    </div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Телефон:</div>
                                    <div class="contacts-store__cell">
                                        <a href="">+7 499 322-34-68 (Москва)</a>
                                        <a href="">+7 812 407-35-68 (Санкт-Петербург)</a>
                                        <a href="">+7 800 775-49-68 (Регионы)</a>
                                    </div>
                                </div>
                                <div class="contacts-store__row">
                                    <div class="contacts-store__cell">Почта:</div>
                                    <div class="contacts-store__cell"><a href="">info@madrobots.ru</a></div>
                                </div>
                            </div>
                            <div class="contacts-store__row_text">
                                <p>Наш колл-центр работает ежедневно (пн‑вс 9–21 по МСК)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h1 class="requisites_block_title">Реквизиты</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="contacts-requisites__col">
                            <div class="contacts-requisites__title">ООО «МЭДРОБОТС СТОР»</div>
                            <div class="contacts-requisites__table">
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">ИНН:</div>
                                    <div class="contacts-requisites__cell"><span>7704375584</span></div>
                                </div>
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">КПП:</div>
                                    <div class="contacts-requisites__cell"> <span>770401001</span></div>
                                </div>
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">ОГРН:</div>
                                    <div class="contacts-requisites__cell"><span>5167746208889</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <div class="contacts-requisites__col">
                            <div class="contacts-requisites__title">Банковские реквизиты</div>
                            <div class="contacts-requisites__table">
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">Банк:</div>
                                    <div class="contacts-requisites__cell"><span>ПАО «СБЕРБАНК» г.Москва</span>
                                    </div>
                                </div>
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">ИНН:</div>
                                    <div class="contacts-requisites__cell"> <span>7704375584</span></div>
                                </div>
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">КПП:</div>
                                    <div class="contacts-requisites__cell"><span>770401001</span></div>
                                </div>
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">БИК:</div>
                                    <div class="contacts-requisites__cell"><span>044525225</span></div>
                                </div>
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">Р/счёт:</div>
                                    <div class="contacts-requisites__cell"><span>4070 2810 4380 0002 1894</span>
                                    </div>
                                </div>
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">Кор/счёт:</div>
                                    <div class="contacts-requisites__cell"><span>3010 1810 4000 0000 0225</span>
                                    </div>
                                </div>
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">Юр. адрес</div>
                                    <div class="contacts-requisites__cell"><span>119270, г. Москва, Лужнецкая
                                            набережная, д. 10а стр. 1, этаж 2 помещ./ком. V/1</span></div>
                                </div>
                                <div class="contacts-requisites__row">
                                    <div class="contacts-requisites__cell">Почтовый адрес:</div>
                                    <div class="contacts-requisites__cell"><span>1119270, г. Москва, а/я 8
                                        </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection