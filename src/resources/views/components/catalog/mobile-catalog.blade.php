<!-- Mobile catalog -->
<div class="accor">
    <div class="accordion" id="accordionCategories">
        <!-- Категория 1 -->
        @if ($categories->count() > 0)

            @foreach ($categories as $category)

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#category{{ $category->id }}" aria-expanded="true" aria-controls="category{{ $category->id }}">
                            {{ $category->translation()?->name }}
                        </button>
                    </h2>
                    <div id="category{{ $category->id }}" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            
                            @if ($category->children->count() > 0)

                                <div class="accordion" id="accordionSubCategories{{ $category->id }}">
                                    <!-- Подкатегория 1.1 -->

                                    @foreach ($category->children as $child)

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#subcategory{{ $category->id . $child->id }}" aria-expanded="false" aria-controls="subcategory{{ $category->id . $child->id }}">
                                                    {{ $child->translation()?->name }}
                                                </button>
                                            </h2>
                                            @if ($child->children->count() > 0)

                                                <div class="accordion-item">
                                                    @foreach ($child->children as $grandChild)

                                                        <div id="subcategory{{ $category->id . $child->id }}" class="accordion-collapse collapse">
                                                            <div class="accordion-body">
                                                                <a href="#" class="mobile-catalog-accordion-body__link">{{ $grandChild->translation()?->name }}</a>
                                                            </div>
                                                        </div>

                                                    @endforeach
                                                </div>

                                            @endif
                                        </div>

                                    @endforeach
                                </div>

                            @endif

                        </div>
                    </div>
                </div>

            @endforeach

        @endif
        
    </div>
</div>
<!-- End mobile catalog -->