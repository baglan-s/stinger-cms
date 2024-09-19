<div>
    @if (!empty($orderOptions))
        <div class="catalog-control__mobile">
            <div class="catalog-filter">
                <svg fill="#414763" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" stroke="#414763"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M498.723,89.435H183.171V76.958c0-18.3-14.888-33.188-33.188-33.188h-51.5c-18.3,0-33.188,14.888-33.188,33.188v12.477 H13.275C5.943,89.435,0,95.38,0,102.711c0,7.331,5.943,13.275,13.275,13.275h52.018v12.473c0,18.3,14.888,33.188,33.188,33.188 h51.501c18.3,0,33.188-14.888,33.188-33.188v-12.473h315.553c7.332,0,13.275-5.945,13.275-13.275 C511.999,95.38,506.055,89.435,498.723,89.435z M156.621,128.459c0,3.66-2.978,6.638-6.638,6.638H98.482 c-3.66,0-6.638-2.978-6.638-6.638V76.958c0-3.66,2.978-6.638,6.638-6.638h51.501c3.66,0,6.638,2.978,6.638,6.638V128.459z"></path> </g> </g> <g> <g> <path d="M498.725,237.295h-52.019v-12.481c0-18.3-14.888-33.188-33.188-33.188h-51.501c-18.3,0-33.188,14.888-33.188,33.188 v12.481H13.275C5.943,237.295,0,243.239,0,250.57c0,7.331,5.943,13.275,13.275,13.275h315.553v12.469 c0,18.3,14.888,33.188,33.188,33.188h51.501c18.3,0,33.188-14.888,33.188-33.188v-12.469h52.019 c7.332,0,13.275-5.945,13.275-13.275C512,243.239,506.057,237.295,498.725,237.295z M420.155,276.315 c0,3.66-2.978,6.638-6.638,6.638h-51.501c-3.66,0-6.638-2.978-6.638-6.638v-51.501c0-3.66,2.978-6.638,6.638-6.638h51.501 c3.66,0,6.638,2.978,6.638,6.638V276.315z"></path> </g> </g> <g> <g> <path d="M498.725,396.014H276.432v-12.473c0-18.3-14.888-33.188-33.188-33.188h-51.501c-18.3,0-33.188,14.888-33.188,33.188 v12.473H13.275C5.943,396.014,0,401.959,0,409.289c0,7.331,5.943,13.275,13.275,13.275h145.279v12.477 c0,18.3,14.888,33.188,33.188,33.188h51.501c18.3,0,33.188-14.888,33.188-33.188v-12.477h222.293 c7.332,0,13.275-5.945,13.275-13.275C512,401.957,506.057,396.014,498.725,396.014z M249.881,435.042 c0,3.66-2.978,6.638-6.638,6.638h-51.501c-3.66,0-6.638-2.978-6.638-6.638v-51.501c0-3.66,2.978-6.638,6.638-6.638h51.501 c3.66,0,6.638,2.978,6.638,6.638V435.042z"></path> </g> </g> </g></svg>
            </div>
            <div class="catalog-products__controls">
                <div class="catalog-control">
                    <span>{{ $selectedOrder['name'] ?? '' }}</span>
                    <svg width="64px" height="64px" viewBox="0 0 20.00 20.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#778ba5" stroke="#778ba5"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.16"></g><g id="SVGRepo_iconCarrier"> <title>arrow_down [#778ba5]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -6684.000000)" fill="#778ba5"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M144,6525.39 L142.594,6524 L133.987,6532.261 L133.069,6531.38 L133.074,6531.385 L125.427,6524.045 L124,6525.414 C126.113,6527.443 132.014,6533.107 133.987,6535 C135.453,6533.594 134.024,6534.965 144,6525.39" id="arrow_down-[#778ba5]"> </path> </g> </g> </g> </g></svg>
                </div>
                <div class="catalog-control__dropdown">
                    @foreach ($orderOptions as $option)
                        <button class="catalog-control__item @if($order === $option['code']) is-active @endif" wire:click="setOrder('{{ $option['code'] }}')">
                            <span class="d-block d-md-none d-sm-none">{{ $option['name'] ?? '' }}</span>
                            <span class="d-none d-md-block d-sm-block">{{ $option['name'] ?? '' }}</span>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="catalog-products__controls catalog-control__desktop">
            <div class="catalog-control">
                <span>{{ $selectedOrder['name'] ?? '' }}</span>
                <svg width="64px" height="64px" viewBox="0 0 20.00 20.00" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#778ba5" stroke="#778ba5"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.16"></g><g id="SVGRepo_iconCarrier"> <title>arrow_down [#778ba5]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -6684.000000)" fill="#778ba5"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M144,6525.39 L142.594,6524 L133.987,6532.261 L133.069,6531.38 L133.074,6531.385 L125.427,6524.045 L124,6525.414 C126.113,6527.443 132.014,6533.107 133.987,6535 C135.453,6533.594 134.024,6534.965 144,6525.39" id="arrow_down-[#778ba5]"> </path> </g> </g> </g> </g></svg>
            </div>
            <div class="catalog-control__dropdown">
                @foreach ($orderOptions as $option)
                    <button class="catalog-control__item @if($order === $option['code']) is-active @endif" wire:click="setOrder('{{ $option['code'] }}')">
                        <span class="d-block d-md-none d-sm-none">{{ $option['name'] ?? '' }}</span>
                        <span class="d-none d-md-block d-sm-block">{{ $option['name'] ?? '' }}</span>
                    </button>
                @endforeach
            </div>
        </div>
    @endif
</div>
