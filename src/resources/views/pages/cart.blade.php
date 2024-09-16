@extends('layouts.main')

@section('content')

<!-- Start Cart page content -->

<div class="cart-wrap">
    <div class="cart-head-wrap  h-container">
        <div class="cart-head">
            <h1>Корзина</h1>
            <div class="cart-steps">
                <div class="cart-step">
                    <h5>Корзина</h5>
                    <svg class="cart-step__icon is-active" width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.45925 6C4.02505 6 2.1552 8.15595 2.49945 10.5657L3.51965 17.7071C3.87155 20.1704 5.98115 22 8.4694 22H15.531C18.0193 22 20.1289 20.1704 20.4808 17.7071L21.501 10.5657C21.8452 8.15595 19.9754 6 17.5412 6H6.45925Z" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00016 4.76363C7.84716 3.06962 9.57838 2 11.4721 2H12.5279C14.4218 2 16.1531 3.07003 17 4.76396L17.8944 6.55279C18.1414 7.04677 17.9412 7.64744 17.4472 7.89443C16.9532 8.14142 16.3526 7.94119 16.1056 7.44721L15.2112 5.65838C14.703 4.64202 13.6642 4 12.5279 4H11.4721C10.3357 4 9.29715 4.64179 8.78901 5.65805L7.89443 7.44721C7.64744 7.94119 7.04677 8.14142 6.55279 7.89443C6.05881 7.64744 5.85859 7.04676 6.10558 6.55279L7.00016 4.76363Z"/>
                    </svg>
                </div>
                <div class="step-progress is-active"></div>
    
                <div class="cart-step">
                    <h5>Доставка</h5>
                    <svg class="cart-step__icon" width="800px" height="800px" viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5777 4.43152L15.5777 3.38197C13.8221 2.46066 12.9443 2 12 2C11.0557 2 10.1779 2.46066 8.42229 3.38197L8.10057 3.5508L17.0236 8.64967L21.0403 6.64132C20.3941 5.90949 19.3515 5.36234 17.5777 4.43152Z"/>
                        <path d="M21.7484 7.96434L17.75 9.96353V13C17.75 13.4142 17.4142 13.75 17 13.75C16.5858 13.75 16.25 13.4142 16.25 13V10.7135L12.75 12.4635V21.904C13.4679 21.7252 14.2848 21.2965 15.5777 20.618L17.5777 19.5685C19.7294 18.4393 20.8052 17.8748 21.4026 16.8603C22 15.8458 22 14.5833 22 12.0585V11.9415C22 10.0489 22 8.86557 21.7484 7.96434Z"/>
                        <path d="M11.25 21.904V12.4635L2.25164 7.96434C2 8.86557 2 10.0489 2 11.9415V12.0585C2 14.5833 2 15.8458 2.5974 16.8603C3.19479 17.8748 4.27062 18.4393 6.42228 19.5685L8.42229 20.618C9.71524 21.2965 10.5321 21.7252 11.25 21.904Z"/>
                        <path d="M2.95969 6.64132L12 11.1615L15.4112 9.4559L6.52456 4.37785L6.42229 4.43152C4.64855 5.36234 3.6059 5.90949 2.95969 6.64132Z"/>
                    </svg>
                </div>
                <div class="step-progress"></div>
    
                <div class="cart-step">
                    <h5>Оплата</h5>
                    <svg class="cart-step__icon" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                viewBox="0 0 502.685 502.685" xml:space="preserve"><g><g><path  d="M482.797,276.924c4.53-5.824,6.73-13.331,4.724-20.988L428.05,30.521
                        c-3.451-13.029-16.847-20.837-29.854-17.386L18.184,113.331C5.22,116.761-2.61,130.2,0.798,143.207L60.269,368.6
                        c3.408,13.007,16.868,20.816,29.876,17.408l134.278-35.419v75.476c0,42.214,69.954,64.303,139.11,64.303
                        c69.113,0,139.153-22.089,139.153-64.302V311.61C502.685,297.869,495.157,286.307,482.797,276.924z M439.763,199.226l6.212,23.469
                        l-75.541,19.953l-6.169-23.512L439.763,199.226z M395.931,50.733l11.799,44.695l-118.014,31.148l-11.799-44.695L395.931,50.733z
                        M342.975,224.744l6.04,22.951c-27.934,1.251-55.113,6.126-76.943,14.452l-4.616-17.429L342.975,224.744z M79.984,319.224
                        l-6.169-23.426l75.519-19.975l6.212,23.555L79.984,319.224z M170.625,270.237l75.476-19.953l5.716,21.506
                        c-1.834,1.122-3.559,2.286-5.242,3.473l-69.781,18.421L170.625,270.237z M477.491,424.209c0,24.612-50.993,44.544-113.958,44.544
                        c-62.9,0-113.937-19.953-113.937-44.544v-27.718c0-0.928,0.539-1.769,0.69-2.653c3.602,23.34,52.654,41.847,113.247,41.847
                        c60.614,0,109.687-18.508,113.268-41.847c0.151,0.884,0.69,1.726,0.69,2.653V424.209z M477.491,369.678
                        c0,24.591-50.993,44.522-113.958,44.522c-62.9,0-113.937-19.931-113.937-44.522V341.96c0-0.906,0.539-1.769,0.69-2.653
                        c3.602,23.318,52.654,41.869,113.247,41.869c60.614,0,109.687-18.551,113.268-41.869c0.151,0.884,0.69,1.747,0.69,2.653V369.678z
                        M363.532,356.11c-62.9,0-113.937-19.931-113.937-44.501c0-24.569,51.036-44.5,113.937-44.5c62.965,0,113.958,19.931,113.958,44.5
                        C477.491,336.179,426.497,356.11,363.532,356.11z"/> </g>	<g>	</g>	<g>	</g>	<g>	</g><g>	</g><g>	</g><g>	</g><g>	</g><g>	</g><g>	</g><g>	</g><g>	</g><g>	</g><g>	</g>	<g>	</g><g>	</g></g>
                    </svg>
                </div>
                <div class="step-progress"></div>
    
                <div class="cart-step">
                    <h5>Заказ оформлен</h5>
                    
                        <svg class="cart-step__icon" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            viewBox="0 0 503.768 503.768" xml:space="preserve">
                            <g>
                            <g>
                            <path    d="M188.144,430.205H155.54l0,0h7.706v-86.017h-81.53V43.212H63.679
                                c-9.527,0-17.249,7.722-17.249,17.249v402.519c0,9.527,7.722,17.249,17.249,17.249h170.05l-10.364-17.948l-29.125-16.818
                                l-6.096-3.52v-7.039V430.205z M138.86,368.574v44.951l-44.951-44.951H138.86z"/>
                            <path    d="M338.913,43.212v182.186l15.916,9.193h19.37V60.46c0-9.527-7.722-17.249-17.249-17.249H338.913z"/>
                            <path    d="M112.491,81.936h194.07c9.527,0,15.054-7.405,12.347-16.542l-6.576-22.191l-0.87-2.943
                                c-0.179-0.602-0.463-1.171-0.707-1.756c-3.381-8.299-12.551-14.786-21.451-14.786h-56.063C233.241,10.616,222.617,0,209.522,0
                                c-13.103,0-23.719,10.616-23.719,23.719H129.74c-8.901,0-18.062,6.487-21.451,14.786c-0.236,0.585-0.52,1.154-0.699,1.756
                                l-0.878,2.951l-6.576,22.191C97.437,74.531,102.965,81.936,112.491,81.936z M209.53,9.267c7.982,0,14.453,6.47,14.453,14.453
                                h-28.905C195.07,15.737,201.548,9.267,209.53,9.267z"/>
                            <path    d="M316.332,140.852c-13.932-6.21-33.197-22.362-49.861-18.558
                                c-27.816,6.357-52.779,21.159-80.432,28.604c-17.005,4.576-28.759-20.972-46.032-21.89c-13.079-0.691-27.223,14.339-35.579,22.492
                                c-11.957,11.664,6.348,29.954,18.297,18.297c19.379-18.907,36.05,10.884,58.981,7.641c19.817-2.804,37.521-10.014,56.063-17.249
                                c25.938-10.128,41.391-7.738,65.5,3.008C318.372,169.928,331.548,147.631,316.332,140.852z"/>
                            <path    d="M294.718,228.616l18.785-10.844l6.096-3.52l2.764,1.593c-0.927-2.406-2.812-4.56-6.04-5.991
                                c-13.932-6.21-33.197-22.362-49.861-18.558c-27.816,6.357-52.779,21.159-80.432,28.604c-17.005,4.576-28.759-20.972-46.032-21.89
                                c-13.079-0.691-27.223,14.339-35.579,22.492c-11.957,11.665,6.348,29.954,18.297,18.297c19.379-18.907,36.05,10.884,58.981,7.641
                                c19.817-2.804,37.522-10.014,56.063-17.249C260.505,220.309,275.193,221.057,294.718,228.616z"/>
                            <path    d="M188.144,297.189v-7.039l6.096-3.52l19.907-11.494c-9.202,3.707-18.493,7.202-28.109,9.795
                                c-17.005,4.576-28.759-20.972-46.032-21.89c-13.079-0.691-27.223,14.339-35.579,22.492c-11.957,11.665,6.348,29.954,18.297,18.297
                                c19.379-18.907,36.05,10.884,58.981,7.641c2.203-0.309,4.292-0.853,6.446-1.268v-13.014H188.144z"/>
                            <path    d="M438.87,297.189l-31.953-18.452l-18.452-31.953h-14.266h-22.638l-12.648-7.299l-19.305-11.144
                                l-0.138,0.081l-8.372,4.828l-23.451,13.542h-36.904l-10.25,17.761l-8.194,14.201l-31.962,18.452v10.21v26.694l-18.452,31.953
                                l18.452,31.953v32.197v4.698l31.962,18.452l15.517,26.873l2.934,5.08h36.904l31.962,18.452l31.962-18.452h36.904l18.452-31.953
                                l31.953-18.452v-36.904l18.452-31.962l-18.452-31.962v-36.896H438.87z M390.944,338.636l-16.753,16.753l-35.286,35.286
                                l-31.734,31.734c-2.569,2.569-5.95,3.812-9.315,3.772c-3.365,0.049-6.747-1.195-9.315-3.772l-40.277-40.277
                                c-5.048-5.048-5.048-13.233,0-18.281l10.665-10.665c5.048-5.048,13.233-5.048,18.273,0l20.655,20.655l41.057-41.057l23.093-23.093
                                c3.308-3.308,7.95-4.406,12.193-3.373c2.227,0.545,4.349,1.634,6.088,3.373l10.665,10.665
                                C395.992,325.411,395.992,333.589,390.944,338.636z"/>
                            </g>
                            </g>
                        </svg>
                </div>
            </div>
        </div>
        <div class="cart-head-mobile">
            <a href="#">
                <svg viewBox="-4.5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#03a9f4"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>arrow_left [#03a9f4]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -6679.000000)" fill="#03a9f4"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M338.61,6539 L340,6537.594 L331.739,6528.987 L332.62,6528.069 L332.615,6528.074 L339.955,6520.427 L338.586,6519 C336.557,6521.113 330.893,6527.014 329,6528.987 C330.406,6530.453 329.035,6529.024 338.61,6539" id="arrow_left-[#03a9f4]"> </path> </g> </g> </g> </g></svg>
                Обратно к покупкам
            </a>
            <button class="cart-reset-mobile">Очистить</button>
        </div>
    </div>



    <div class="cart-block-mobile">
        <button class="cart-reset">Очистить корзину</button>
        <ul class="order-list">
            <li class="order-item-mobile">
                <div class="order-item">
                    <img src="{{ asset('assets/images/products/product.jpg') }}" alt="">
                    <div class="order-item-content">
                        <div class="order-item-prices">
                            <span class="order-discount">30%</span>
                            <div>
                                <span class="order-price">7 500 ₸</span>
                                <span class="order-old-price">8 000 ₸</span>
                            </div>
                        </div>
                        <h3> Точилка для ножей MIKU 4 в 1 с магнитом </h3>

                        
                    </div>
                    <button class="order-delete">
                        <svg viewBox="-3 0 32 32" version="1.1" 
                        xmlns="http://www.w3.org/2000/svg" 
                        xmlns:xlink="http://www.w3.org/1999/xlink" 
                        xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs> </defs> <g id="Page-1" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-259.000000, -203.000000)" fill="#000000"> <path d="M282,211 L262,211 C261.448,211 261,210.553 261,210 C261,209.448 261.448,209 262,209 L282,209 C282.552,209 283,209.448 283,210 C283,210.553 282.552,211 282,211 L282,211 Z M281,231 C281,232.104 280.104,233 279,233 L265,233 C263.896,233 263,232.104 263,231 L263,213 L281,213 L281,231 L281,231 Z M269,206 C269,205.447 269.448,205 270,205 L274,205 C274.552,205 275,205.447 275,206 L275,207 L269,207 L269,206 L269,206 Z M283,207 L277,207 L277,205 C277,203.896 276.104,203 275,203 L269,203 C267.896,203 267,203.896 267,205 L267,207 L261,207 C259.896,207 259,207.896 259,209 L259,211 C259,212.104 259.896,213 261,213 L261,231 C261,233.209 262.791,235 265,235 L279,235 C281.209,235 283,233.209 283,231 L283,213 C284.104,213 285,212.104 285,211 L285,209 C285,207.896 284.104,207 283,207 L283,207 Z M272,231 C272.552,231 273,230.553 273,230 L273,218 C273,217.448 272.552,217 272,217 C271.448,217 271,217.448 271,218 L271,230 C271,230.553 271.448,231 272,231 L272,231 Z M267,231 C267.552,231 268,230.553 268,230 L268,218 C268,217.448 267.552,217 267,217 C266.448,217 266,217.448 266,218 L266,230 C266,230.553 266.448,231 267,231 L267,231 Z M277,231 C277.552,231 278,230.553 278,230 L278,218 C278,217.448 277.552,217 277,217 C276.448,217 276,217.448 276,218 L276,230 C276,230.553 276.448,231 277,231 L277,231 Z" id="trash" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                    </button>
                </div>
                <div class="order-item-options">
                    <div class="custom-select-wrapper">
                        <select  class="selectpicker my-select">
                            <option value="1">Розовый</option>
                            <option value="2">Черный</option>
                            <option value="3">Синий</option>
                        </select>
                        <svg class="dropdown-icon" width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M.158.82A.783.783 0 011.263.66L5 3.5 8.737.66a.783.783 0 011.105.16.807.807 0 01-.158 1.12L5 5.5.316 1.94A.807.807 0 01.158.82z" fill="#8F90A6"></path>
                        </svg>
                    </div>

                    <div class="custom-select-wrapper">
                        <select data-width="60px"  class="selectpicker my-select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <svg class="dropdown-icon" width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M.158.82A.783.783 0 011.263.66L5 3.5 8.737.66a.783.783 0 011.105.16.807.807 0 01-.158 1.12L5 5.5.316 1.94A.807.807 0 01.158.82z" fill="#8F90A6"></path>
                        </svg>
                    </div>
                </div>

            
                


            </li>
            
        </ul>
    </div>

    

    <div class="cart h-container">
        <main class="cart-block-wrap">

            <div class="cart-block">
                <button class="cart-reset">Очистить корзину</button>
                <ul class="order-list">
                    <li class="order-item">
                        <img src="{{ asset('assets/images/products/product.jpg') }}" alt="">
                        <div class="order-item-content">
                            <h3> Точилка для ножей MIKU 4 в 1 с магнитом </h3>

                            {{-- <div class="custom-select-wrapper">
                                <select class="selectpicker my-select">
                                    <option value="1">Розовый</option>
                                    <option value="2">Черный</option>
                                    <option value="3">Синий</option>
                                </select>
                                <svg class="dropdown-icon" width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M.158.82A.783.783 0 011.263.66L5 3.5 8.737.66a.783.783 0 011.105.16.807.807 0 01-.158 1.12L5 5.5.316 1.94A.807.807 0 01.158.82z" fill="#8F90A6"></path>
                                </svg>
                            </div> --}}
                        </div>
                        <div class="order-item-options">

                            <div class="custom-select-wrapper">
                                <select data-width="60px"  class="selectpicker my-select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <svg class="dropdown-icon" width="10" height="6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M.158.82A.783.783 0 011.263.66L5 3.5 8.737.66a.783.783 0 011.105.16.807.807 0 01-.158 1.12L5 5.5.316 1.94A.807.807 0 01.158.82z" fill="#8F90A6"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="order-item-prices">
                            <span class="order-discount">30%</span>
                            <span class="order-price">7 500 ₸</span>
                            <span class="order-old-price">8 000 ₸</span>
                        </div>
                        <button class="order-delete">
                            <svg viewBox="-3 0 32 32" version="1.1" 
                            xmlns="http://www.w3.org/2000/svg" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" 
                            xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs> </defs> <g id="Page-1" stroke-width="1" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-259.000000, -203.000000)" fill="#000000"> <path d="M282,211 L262,211 C261.448,211 261,210.553 261,210 C261,209.448 261.448,209 262,209 L282,209 C282.552,209 283,209.448 283,210 C283,210.553 282.552,211 282,211 L282,211 Z M281,231 C281,232.104 280.104,233 279,233 L265,233 C263.896,233 263,232.104 263,231 L263,213 L281,213 L281,231 L281,231 Z M269,206 C269,205.447 269.448,205 270,205 L274,205 C274.552,205 275,205.447 275,206 L275,207 L269,207 L269,206 L269,206 Z M283,207 L277,207 L277,205 C277,203.896 276.104,203 275,203 L269,203 C267.896,203 267,203.896 267,205 L267,207 L261,207 C259.896,207 259,207.896 259,209 L259,211 C259,212.104 259.896,213 261,213 L261,231 C261,233.209 262.791,235 265,235 L279,235 C281.209,235 283,233.209 283,231 L283,213 C284.104,213 285,212.104 285,211 L285,209 C285,207.896 284.104,207 283,207 L283,207 Z M272,231 C272.552,231 273,230.553 273,230 L273,218 C273,217.448 272.552,217 272,217 C271.448,217 271,217.448 271,218 L271,230 C271,230.553 271.448,231 272,231 L272,231 Z M267,231 C267.552,231 268,230.553 268,230 L268,218 C268,217.448 267.552,217 267,217 C266.448,217 266,217.448 266,218 L266,230 C266,230.553 266.448,231 267,231 L267,231 Z M277,231 C277.552,231 278,230.553 278,230 L278,218 C278,217.448 277.552,217 277,217 C276.448,217 276,217.448 276,218 L276,230 C276,230.553 276.448,231 277,231 L277,231 Z" id="trash" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                        </button>


                    </li>
                </ul>
            </div>





        </main>
        <aside class="cart-side">
            <div class="cart-side-content">
                <button class="base-button">Перейти к оформлению</button>
                <p class="mt-3">Нажимая на кнопку вы даете согласие на</p>
                <div class="link-policy">
                    <a href="#">обработку персональных данных</a>
                </div>
                <hr>
                <div class="side-checkout">
                    <h5>Ваш заказ</h5>

                    <div class="accordion cart-accordion accordion-flush">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button 
                                class="accordion-button collapsed" 
                                type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseOne" 
                                aria-expanded="false" 
                                aria-controls="collapseOne">
                                    <span>2 товара на сумму</span>
                                
                                </button>
                                <span class="cart-total">100 580 ₸</span>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body cart-list-body">
                                    <ul class="cart-list">
                                        <li class="cart-list__item"><span class="cart-list-item__title">Точилка для ножей MIKU 4 в 1 с магнитом</span> <span class="cart-list-item__price">150 000 ₸</span></li>
                                        <li class="cart-list__item"><span class="cart-list-item__title">Точилка для ножей MIKU 4 в 1 с овощечисткой</span> <span class="cart-list-item__price">790 ₸</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="headingTwo">
                                <button 
                                class="accordion-button short-to-arrow collapsed" 
                                type="button" data-bs-toggle="collapse" 
                                data-bs-target="#collapseTwo" 
                                aria-expanded="false" 
                                aria-controls="collapseTwo">
                                    <span>Скидка</span>
                                
                                </button>
                                <span class="cart-total">-25 000 ₸</span>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body cart-list-body">
                                    <ul class="cart-list">
                                        <li class="cart-list__item"><span class="cart-list-item__title">Акция</span> <span class="cart-list-item__price">-10 000 ₸</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cart-total-price">
                        <span>К оплате</span>
                        <span>85 000 ₸</span>
                    </div>
                    




                    
                </div>
            </div>

            <div class="cart-side-mobile">
                <div class="side-checkout">
                    <h5>Ваш заказ</h5>

                    <div class="accordion cart-accordion accordion-flush">
                        <div class="accordion-item">
                            <div class="accordion-item-row">
                                <h2 class="accordion-header" id="headingOne">
                                    <button 
                                    class="accordion-button collapsed" 
                                    type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseOne" 
                                    aria-expanded="false" 
                                    aria-controls="collapseOne">
                                        <span>200 товара на сумму</span>
                                    
                                    </button>
                                </h2>
                                <span class="cart-total-mobile">100 580 ₸</span>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body cart-list-body">
                                    <ul class="cart-list">
                                        <li class="cart-list__item"><span class="cart-list-item__title">Точилка для ножей MIKU 4 в 1 с магнитом</span> <span class="cart-list-item__price">150 000 ₸</span></li>
                                        <li class="cart-list__item"><span class="cart-list-item__title">Точилка для ножей MIKU 4 в 1 с овощечисткой</span> <span class="cart-list-item__price">790 ₸</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <div class="accordion-item-row">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button 
                                    class="accordion-button short-to-arrow collapsed" 
                                    type="button" data-bs-toggle="collapse" 
                                    data-bs-target="#collapseTwo" 
                                    aria-expanded="false" 
                                    aria-controls="collapseTwo">
                                        <span>Скидка</span>
                                    
                                    </button>
                                </h2>
                                <span class="cart-total-mobile">25 000 ₸</span>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body cart-list-body">
                                    <ul class="cart-list">
                                        <li class="cart-list__item"><span class="cart-list-item__title">Акция</span> <span class="cart-list-item__price">-10 000 ₸</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cart-total-price">
                        <span>К оплате</span>
                        <span>85 000 ₸</span>
                    </div>
                    




                    
                </div>
                <hr>
                <button class="base-button">Перейти к оформлению</button>
                <p class="mt-3">Нажимая на кнопку вы даете согласие на</p>
                <div class="link-policy">
                    <a href="#">обработку персональных данных</a>
                </div>

            </div>
        </aside>
    </div>

    <div class="promo-section-wrap h-container">
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
    </div>

    








 </div>

<!-- End Cart page content -->

@endsection