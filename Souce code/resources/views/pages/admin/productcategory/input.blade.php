<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
                data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <ul
                        class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_add_product_general">General</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                            role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Produk Kategori</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Nama Kategori</label>
                                            <input type="text" name="name_product_category" class="form-control mb-2" placeholder="Masukkan Nama Kategori Anda" value="{{ $data->name_product_category }}" />
                                            <div class="text-muted fs-7">Set nama kategori.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="button" onclick="load_list(1);" class="btn btn-light me-5">Kembali</button>
                        @if ($data->id)
                        <button type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_upload('#kt_ecommerce_add_product_submit','#kt_ecommerce_add_product_form','{{route('admin.productcategory.update',$data->id)}}','PATCH');" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        @else
                            <button type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_upload('#kt_ecommerce_add_product_submit','#kt_ecommerce_add_product_form','{{route('admin.productcategory.store')}}','POST');" class="btn btn-primary">
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
    $("#status").on('change', function() {
        if(this.value == "Published"){
            $("#scheduled_product").removeClass('d-none');
            $("#scheduled_product").addClass('d-none');
            $("#product_status").removeClass('bg-danger');
            $("#product_status").removeClass('bg-warning');
            $("#product_status").addClass('bg-success');
        }else if(this.value == "Draft"){
            $("#scheduled_product").removeClass('d-none');
            $("#scheduled_product").addClass('d-none');
            $("#product_status").removeClass('bg-success');
            $("#product_status").removeClass('bg-danger');
            $("#product_status").addClass('bg-warning');
        }else if(this.value == "Scheduled"){
            obj_date_time('date_publish');
            $("#scheduled_product").removeClass('d-none');
            $("#product_status").removeClass('bg-warning');
            $("#product_status").removeClass('bg-success');
            $("#product_status").removeClass('bg-danger');
            $("#product_status").addClass('bg-primary');
        }else{
            $("#scheduled_product").removeClass('d-none');
            $("#scheduled_product").addClass('d-none');
            $("#product_status").removeClass('bg-warning');
            $("#product_status").removeClass('bg-success');
            $("#product_status").addClass('bg-danger');
        }
    });
    var Delta = Quill.import('delta');
    var quill = new Quill('#kt_docs_quill_autosave', {
        modules: {
            toolbar: true
        },
        placeholder: 'Type your text here...',
        theme: 'snow'
    });

    // Store accumulated changes
    var change = new Delta();
    quill.on('text-change', function (delta) {
        change = change.compose(delta);
    });

    // Save periodically
    setInterval(function () {
        if (change.length() > 0) {
            console.log('Saving changes', change);
            /*
            Send partial changes
            $.post('/your-endpoint', {
            partial: JSON.stringify(change)
            });

            Send entire document
            $.post('/your-endpoint', {
            doc: JSON.stringify(quill.getContents())
            });
            */
            change = new Delta();
        }
    }, 5 * 1000);

    // Check for unsaved data
    window.onbeforeunload = function () {
        if (change.length() > 0) {
            return 'There are unsaved changes. Are you sure you want to leave?';
        }
    }
</script>