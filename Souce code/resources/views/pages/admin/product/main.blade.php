<x-adminLayout>
    <div id="content_list">
        <div class="card card-flush">
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <div class="card-title">
                    <a href="javascript:;" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000" />
                                </g>
                            </svg>
                        </span>
                        Filter
                    </a>
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Cari Produk</div>
                        </div>
                        <div class="separator border-gray-200"></div>
                        <form id="content_filter">
                            <div class="px-7 py-5">
                                <div class="mb-10">
                                    <label class="form-label fw-bold">Masukkan Nama Produk:</label>
                                    <input type="text" name="keywords" class="form-control form-control-solid mb-5">
                                    <label class="form-label fw-bold">Pilih Status:</label>
                                    <div>
                                        <select class="form-select form-select-solid" name="status" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                                            <option></option>
                                            <option value="all">All</option>
                                            <option value="published">Published</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                    <label class="form-label fw-bold">Pilih Kategori:</label>
                                    <div>
                                        <select name="category" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true">
                                            <option></option>
                                            @foreach ($category as $item)
                                                <option value="{{$item->id}}">{{$item->name_product_category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-sm btn-white btn-active-light-primary me-2"  href="{{ route('admin.product.index') }}" data-kt-menu-dismiss="true">Reset</a>
                                    <button type="button" onclick="load_list(1);" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <a href="javascript:;" onclick="load_input('{{ route('admin.product.create') }}');" class="btn btn-primary">Add Product</a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div id="list_result"></div>
            </div>
        </div>
    </div>
    <div id="content_input"></div>

    @section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection

</x-adminLayout>