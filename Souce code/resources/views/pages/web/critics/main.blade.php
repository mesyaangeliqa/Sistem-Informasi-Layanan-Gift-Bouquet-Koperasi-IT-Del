<x-webLayout title="Kritik Dan Saran">
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Kritik dan Saran</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Kritik dan Saran</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout-area mt-no-text">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12 col-12 col-custom">
                    <form id="kt_ecommerce_add_product_form">
                        <div class="checkbox-form">
                            <h1>Kritik & Saran</h1>
                            <h6>Saran dari anda menjadi patokan majunya usaha kami</h6>
                            <div class="row align-items-center">
                                <div class="col-md-12 col-custom">
                                    <div class="country-select clearfix"></div>
                                </div>
                                <div class="col-lg-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label>Nama : <span class="required"></span></label>
                                        <input value="{{Auth::user()->name}}" type="text" readonly>
                                    </div>
                                </div>

                                <div class=" col-lg-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label>E-mail :<span class="required"></span></label>
                                        <input value="{{ Auth::user()->email}}" type="text" readonly>
                                    </div>
                                </div>
                                <div class="order-notes mt-3">
                                    <div class="col-lg-6 col-custom">
                                        <div class="checkout-form-list checkout-form-list-4">
                                            <label>Saran/Pendapat :</label>
                                            <textarea id="checkout-mess" cols="50" rows="30" name="critic" placeholder="harap gunakan bahasa yang sopan"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <div class="col-lg-6 col-custom">
                                        <button class="btn flosun-button secondary-btn black-color rounded-0 w-100" type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_save('#kt_ecommerce_add_product_submit','#kt_ecommerce_add_product_form','{{ route('user.critics.store')}}','POST');">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-webLayout>