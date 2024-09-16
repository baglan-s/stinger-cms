<div class="catalog-breadcrumbs">
    @if (count($breadcrumbs) > 0)
        @foreach ($breadcrumbs as $breadcrumb)
            <a class="catalog-breadcrumb__item" href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a>
        @endforeach
    @endif
</div>