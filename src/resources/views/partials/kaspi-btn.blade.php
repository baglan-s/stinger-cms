@if($product->id_1c && $currentCity->kaspi_index)
    <div class="ks-widget"
        data-template="button"
        data-merchant-sku="{{ $product->id_1c }}"
        data-merchant-code="{{ $kaspiMerchantCode }}"
        data-city="{{ $currentCity->kaspi_index }}">
    </div>

    <!-- it's a placeholder for dynamic example -->
    <div id="dynamic"></div>

    @push('scripts')
    <!--onpage script, should be added once, before closing </body> -->
    <script>(function(d, s, id) {
        var js, kjs;
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://kaspi.kz/kaspibutton/widget/ks-wi_ext.js';
        kjs = document.getElementsByTagName(s)[0]
        kjs.parentNode.insertBefore(js, kjs);
    }(document, 'script', 'KS-Widget'));</script>
    
    <!-- Example: adding another button placeholder dynamically after 1sec -->
    <script>
        setTimeout(function () {
            document.getElementById('dynamic').innerHTML = '<div class="ks-widget" data-template="button" data-merchant-sku="УТ-00000795" data-merchant-code="Nemo" data-city="750000000" ></div>'
        // you should run this method to recheck buttons in DOM:
        ksWidgetInitializer.reinit()
        }, 1000)
    </script>
    @endpush
@endif