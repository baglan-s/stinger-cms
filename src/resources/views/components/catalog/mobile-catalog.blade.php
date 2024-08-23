<!-- Mobile catalog -->
<div class="accor">
    <div class="accordion" id="accordionCategories">
        <!-- Категория 1 -->
        @if ($categories->count() > 0)

            @foreach ($categories as $category)

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#categoryOne" aria-expanded="true" aria-controls="categoryOne">
                            {{ $category->translation()?->name }}
                        </button>
                    </h2>
                    <div id="categoryOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <div class="accordion" id="accordionSubCategoriesOne">
                                <!-- Подкатегория 1.1 -->
                                @if ($category->children->count() > 0)

                                    @foreach ($category->children as $child)

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#subcategoryOneOne" aria-expanded="false" aria-controls="subcategoryOneOne">
                                                    {{ $child->translation()?->name }}
                                                </button>
                                            </h2>
                                            @if ($child->children->count() > 0)

                                                <div class="accordion-item">
                                                    @foreach ($child->children as $grandChild)

                                                        <div id="subcategoryOneOne" class="accordion-collapse collapse">
                                                            <div class="accordion-body">
                                                                <a href="#" class="mobile-catalog-accordion-body__link">{{ $grandChild->translation()?->name }}</a>
                                                            </div>
                                                        </div>

                                                    @endforeach
                                                </div>

                                            @endif
                                        </div>

                                    @endforeach

                                @endif

                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        @endif
        
    </div>
</div>
<!-- End mobile catalog -->