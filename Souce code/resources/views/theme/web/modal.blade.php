
<div class="modal flosun-modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close close-button" data-dismiss="modal" aria-label="Close">
                <span class="close-icon" aria-hidden="true">x</span>
            </button>
            <div class="modal-body">
                <div class="container-fluid custom-area">
                    <div class="row">
                        <div class="col-md-6 col-custom">
                            <div class="modal-product-img">
                                <a class="w-100" href="#">
                                    {{-- <img class="w-100" src="{{ asset($product->image_product) }}" alt="Product"> --}}
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-custom">
                            <div class="modal-product">
                                <div class="product-content">
                                    <div class="product-title">
                                        {{-- <h4 class="title">{{ $product->name_product }}</h4> --}}
                                    </div>
                                    <div class="price-box">
                                        {{-- <span class="regular-price ">Rp. {{ $product->price_product }}</span> --}}
                                    </div>
                                    {{-- <p class="desc-content">{!! $product->description_product !!}</p> --}}
                                    <div class="quantity-with-btn">
                                        <div class="add-to_btn">
                                            <a class="btn flosun-button secondary-btn rounded-0" href="#">Pesan Sekarang!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>