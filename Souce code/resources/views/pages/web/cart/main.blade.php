<x-webLayout title="Cart">
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Shopping Cart</h3>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content_list">
        <div class="cart-main-wrapper mt-no-text">
            <div class="container custom-area">
                <div id="list_result"></div>
            </div>
        </div>
    </div>
@section('custom_js')
        <script>
            load_list(1);
        </script>
@endsection
</x-webLayout>