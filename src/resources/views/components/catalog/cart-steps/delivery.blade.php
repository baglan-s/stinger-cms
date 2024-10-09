<div class="cart-delivery">

    <ul class="nav nav-tabs cart-contact-list" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="cart-contact-btn active" id="description-tab" data-bs-toggle="tab" data-bs-target="#delivery_1" 
            type="button" role="tab" aria-controls="description" aria-selected="false">Самовывоз</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="cart-contact-btn" id="specification-tab" data-bs-toggle="tab" data-bs-target="#delivery_2" 
            type="button" role="tab" aria-controls="specification" aria-selected="true">Доставка курьером</button>
        </li>
    </ul>

    <div class="tab-content">

        <div class="delivery_1 tab-pane fade show active" id="delivery_1" role="tabpanel" aria-labelledby="delivery_1-tab">
            <h3>Пункт Самовывоза</h3>
            <div class="custom-select-wrapper">
                <select  class="selectpicker my-select" data-width="100%">
                    <option value="1">Алматы, ул. Абая 23В уг.Байтурсынова</option>
                    <option value="2">Алматы, ул. Абая 23В уг.Байтурсынова</option>
                    <option value="3">Алматы, ул. Абая 23В уг.Байтурсынова</option>
                </select>
                <svg class="dropdown-icon" width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M.158.82A.783.783 0 011.263.66L5 3.5 8.737.66a.783.783 0 011.105.16.807.807 0 01-.158 1.12L5 5.5.316 1.94A.807.807 0 01.158.82z" fill="#8F90A6"></path>
                </svg>
            </div>
            <div class="delivery_1-time">
                <span>Сегодня,</span>
                с 10.00 до 20.00
            </div>
            <hr>
            <div class="delivery_1-consumer">
                <h3>Получатель</h3>
                <div class="delivery_1-list">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="delivery" id="delivery-1-1">
                        <label class="form-check-label" for="delivery-1-1">Я</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="delivery" id="delivery-1-2" checked>
                        <label class="form-check-label" for="delivery-1-2">Другой человек</label>
                    </div>
                </div>
                <div class="cart-contact-form-new__delivery_1">
                  <div class="cart-contact-form-new__delivery__list">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name-1" placeholder="Имя">
                        <label for="name-1">Имя</label>
                        <div class="invalid-feedback">Поле Имя обязательно для заполнения.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="last_name-1" placeholder="Фамилия">
                        <label for="last_name-1">Фамилия</label>
                        <div class="invalid-feedback">Поле Фамилия обязательно для заполнения.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone-1" placeholder="Телефон">
                        <label for="phone-1">Телефон</label>
                        <div class="invalid-feedback">Поле Телефон обязательно для заполнения.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email-1" placeholder="Email">
                        <label for="email-1">Email</label>
                        <div class="invalid-feedback">Поле Email обязательно для заполнения.</div>
                    </div>
                  </div>
                </div>
                <div class="form-floating mt-3 delivery-comment">
                    <textarea class="form-control" placeholder="Оставьте комментарии к доставке" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Комментарии</label>
                </div>
            </div>

        </div>


        <div class="delivery_2 tab-pane fade " id="delivery_2" role="tabpanel" aria-labelledby="delivery_2-tab">
            <h3 class="mt-3">Адрес доставки</h3>
            <div class="delivery_2-address-top">
                <div class="custom-select-wrapper">
                    <select  class="selectpicker my-select" data-width="100%">
                        <option value="1">Алматы, ул. Абая 23В уг.Байтурсынова</option>
                        <option value="2">Алматы, ул. Абая 23В уг.Байтурсынова</option>
                        <option value="3">Алматы, ул. Абая 23В уг.Байтурсынова</option>
                    </select>
                    <svg class="dropdown-icon" width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M.158.82A.783.783 0 011.263.66L5 3.5 8.737.66a.783.783 0 011.105.16.807.807 0 01-.158 1.12L5 5.5.316 1.94A.807.807 0 01.158.82z" fill="#8F90A6"></path>
                    </svg>
                </div>
                {{-- <span>
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12.6111L8.92308 17.5L20 6.5" stroke="#03a9f4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    5 000 ₸
                </span> --}}
            </div>
            <input type="text" class="form-control" id="geoAddress">
            <div class="delivery_2-address-center">
                <div class="form-floating delivery_2-street mb-3">
                    <input type="text" class="form-control" id="floatingInput1" placeholder="Улица">
                    <label for="floatingInput1">Улица</label>
                        <div class="invalid-feedback">Поле Улица обязательно для заполнения.</div>
                </div>
                <div class="form-floating delivery_2-house mb-3">
                    <input type="text" class="form-control" id="floatingInput2" placeholder="Дом">
                    <label for="floatingInput2">Дом</label>
                        <div class="invalid-feedback">Поле Дом обязательно для заполнения.</div>
                </div>
                <div class="form-floating delivery_2-apartment mb-3">
                    <input type="text" class="form-control" id="floatingInput3" placeholder="Квартира">
                    <label for="floatingInput3">Квартира</label>
                        <div class="invalid-feedback">Поле Квартира обязательно для заполнения.</div>
                </div>
            </div>
            <div class="delivery_2-date col-lg-3 col-sm-6 mt-5">
                <label for="deliverytDate">Дата доставки</label>
                <input id="deliverytDate" class="form-control mt-2" type="date" />
                <span id="deliverytDateSelected"></span>
                <div class="invalid-feedback">Поле Дата обязательно для заполнения.</div>
            </div>
            <hr>
            <div class="delivery_1-consumer">
                <h3>Получатель</h3>
                <div class="delivery_1-list">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="deliver" id="delivery-2-1">
                        <label class="form-check-label" for="delivery-2-1">Я</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="deliver" id="delivery-2-2" checked>
                        <label class="form-check-label" for="delivery-2-2">Другой человек</label>
                    </div>
                </div>
                <div class="cart-contact-form-new__delivery_2">
                    <div class="cart-contact-form-new__delivery__list">
                        <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name-2" placeholder="Имя">
                        <label for="name-2">Имя</label>
                        <div class="invalid-feedback">Поле Имя обязательно для заполнения.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="last_name-2" placeholder="Фамилия">
                        <label for="last_name-2">Фамилия</label>
                        <div class="invalid-feedback">Поле Фамилия обязательно для заполнения.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone-2" placeholder="Телефон">
                        <label for="phone-2">Телефон</label>
                        <div class="invalid-feedback">Поле Телефон обязательно для заполнения.</div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email-2" placeholder="Email">
                        <label for="email-2">Email</label>
                        <div class="invalid-feedback">Поле Email обязательно для заполнения.</div>
                    </div>
                    </div>
                </div>
                <div class="form-floating mt-3 delivery-comment">
                    <textarea class="form-control" placeholder="Оставьте комментарии к доставке" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Комментарии</label>
                </div>
            </div>
        </div>
    </div>
</div>