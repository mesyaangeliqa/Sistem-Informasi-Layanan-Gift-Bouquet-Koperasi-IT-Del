<x-webLayout title="Bouquet">
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">All Product</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Gift Bouquet</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content_list">
        <div class="shop-main-area">
            <div class="container container-default custom-area">
                <div class="row flex-row-reverse">
                    <div class="col-12 col-custom widget-mt">
                        <div class="shop_toolbar_wrapper mb-30">
                            <div class="shop_toolbar_btn">
                                <button data-role="grid_4" type="button" class="active btn-grid-4" title="Grid-4"><i class="fa fa-th"></i></button>
                                <button data-role="grid_3" type="button" class="btn-grid-3" title="Grid-3"> <i class="fa fa-th-large"></i></button>
                                <button data-role="grid_list" type="button" class="btn-list" title="List"><i class="fa fa-th-list"></i></button>
                            </div>
                            <div class="shop-select">
                                @php
                                    $categories = \App\Models\ProductCategory::get();
                                    $category = \App\Models\ProductCategory::count();
                                @endphp
                                <form class="d-flex flex-column w-100" id="content_filter">
                                    <div class="form-group">
                                        <select class="form-control nice-select w-100" onchange="load_list();" name="category">
                                            <option selected value="all">All Category</option>
                                            @foreach ($categories as $item)
                                            <option value="{{ $item->id }}">{{ $item->name_product_category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div id="list_result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('custom_js')
    <script>
        load_list(1);
        load_list1(1);
    </script>
    @endsection



    {{-- <div id="content_list">
        <section id="content">
            @php
                $categories = \App\Models\ProductCategory::get();
                $category = \App\Models\ProductCategory::count();
            @endphp
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row gutter-40 col-mb-80">
                        <div class="postcontent col-lg-9 order-lg-last">
                            <div id="list_result"></div>
                        </div>
                        <div class="sidebar col-lg-3">
                            <div class="sidebar-widgets-wrap">
                                <div class="widget widget-filter-links">
                                    <h4>Pilih Kategori</h4>
                                    <ul class="custom-filter ps-2" >
                                        <li class="widget-filter-reset active-filter"><a href="javascript:;" onchange="load_list();" data-filter="*">Clear</a></li>
                                        <form id="content_filter">
                                            <select class="form-control" onchange="load_list();" name="category">
                                                <option value="all" selected>Pilih Kategori</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name_product_category }}</option>
                                                @endforeach
                                            </select>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection --}}
</x-webLayout>