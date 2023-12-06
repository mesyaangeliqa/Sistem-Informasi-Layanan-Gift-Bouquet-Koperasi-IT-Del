<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
                data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Detail Produk</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <label class="form-label">Kategori</label>
                            <select class="form-select mb-2" id="category" name="id_product_category">
                                <option value="">Pilih Kategori</option>
                                @foreach($product_category as $item)
                                    <option value="{{$item->id}}" {{$product->id_product_category == $item->id ? 'selected' : ''}}>{{$item->name_product_category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Status</h2>
                            </div>
                            <div class="card-toolbar">
                                <div class="rounded-circle w-15px h-15px" id="product_status"></div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="card-body pt-0">
                                <label class="form-label">Status</label>
                                <select class="form-select mb-2" id="status" name="status_product">
                                    <option value="">Pilih Status</option>
                                    <option value="Published" {{$product->status_product=="Published" ? 'selected' : ''}}>Tampil</option>
                                    <option value="Inactive"  {{$product->status_product=="Inactive" ? 'selected' : ''}}>Simpan</option>
                                </select>
                                <div class="text-muted fs-7">Pilih Status</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                            role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Utama</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Nama Produk</label>
                                            <input type="text" name="name_product"
                                                class="form-control mb-2" placeholder="Nama Produk"
                                                value="{{ $product->name_product }}" />
                                            <div class="text-muted fs-7">Isi Nama Produk</div>
                                        </div>
                                        <div>
                                            <label class="form-label">Deskriptsi</label>
                                            <textarea id="description_product" name="description_product">{!! $product->description_product !!}</textarea>
                                            <div class="text-muted fs-7">Isi Deskripsi</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush py-4">                                    
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Harga</label>
                                            <input type="text" id="price_product" name="price_product" class="form-control mb-2"
                                                placeholder="1.000" value="{{ $product->price_product }}" />
                                            <div class="text-muted fs-7">Tentukan Harga</div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Gambar</label>
                                            <input type="file" name="image_product" class="form-control mb-2" accept=".jpg,.jpeg,.png"  placeholder="Product price" value="" />
                                            <div class="text-muted fs-7">Masukkan Gambar</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" onclick="load_list(1);" class="btn btn-light me-5">Kembali</button>
                        @if ($product->id)
                        <button type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_upload('#kt_ecommerce_add_product_submit','#kt_ecommerce_add_product_form','{{route('admin.product.update',$product->id)}}','PATCH');" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        @else
                            <button type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_upload('#kt_ecommerce_add_product_submit','#kt_ecommerce_add_product_form','{{route('admin.product.store')}}','POST');" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    ribuan('price_product');
    $("#status").on('change', function() {
        if(this.value == "Published"){
            $("#product_status").removeClass('bg-danger');
            $("#product_status").removeClass('bg-warning');
            $("#product_status").addClass('bg-success');
        }else{
            $("#product_status").removeClass('bg-warning');
            $("#product_status").removeClass('bg-success');
            $("#product_status").addClass('bg-danger');
        }
    });
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description_product' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>