<x-webLayout>
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Product Details</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('product.index') }}">Gift Bouquet</a></li>
                            <li>{{ $product->name_product }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-main-area">
        <div class="container container-default custom-area">
                <form id="form_order">
                    <div class="row">
                        <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">
                            <div class="product-details-img">
                                <div class="single-product-img swiper-container gallery-top popup-gallery">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <a class="w-100" href="{{ asset($product->image) }}">
                                                <img class="w-100" src="{{ asset($product->image) }}" alt="Product">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-product-thumb swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{ asset($product->image) }}" alt="Product">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-custom">
                            <div class="product-summery position-relative">
                                
                                <div class="product-head mb-3">
                                    <h2 class="product-title">{{ $product->name_product }}</h2>
                                </div>
                                <div class="price-box mb-2">
                                    <span class="regular-price">Rp. {{ $product->price_product }}</span>
                                </div>
                                @php
                                    $rating = \App\Models\Review::where('id_product', $product->id)->avg('rating');
                                @endphp
                                <section class="rating">
                                @if($rating >= 0 && $rating <= 1)
                                    <label>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="font-size: 17px">&nbsp;&nbsp;{{ number_format($rating,1,',','.') }}</span>
                                    </label>
                                @elseif($rating < 2)
                                    <label>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="font-size: 17px">&nbsp;&nbsp;{{ number_format($rating,1,',','.') }}</span>
                                    </label>
                                @elseif($rating < 3)
                                    <label>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="font-size: 17px">&nbsp;&nbsp;{{ number_format($rating,1,',','.') }}</span>
                                    </label>
                                @elseif($rating < 4)
                                    <label>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="font-size: 17px">&nbsp;&nbsp;{{ number_format($rating,1,',','.') }}</span>
                                    </label>
                                @elseif($rating < 5)
                                    <label>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="font-size: 17px">&nbsp;&nbsp;{{ number_format($rating,1,',','.') }}</span>
                                    </label>
                                @elseif($rating >= 5)
                                    <label>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="color: rgb(221, 221, 79) !important;">★</span>
                                        <span class="icon" style="font-size: 17px">&nbsp;&nbsp;{{ number_format($rating,1,',','.') }}</span>
                                    </label>
                                @endif
                                </section>
                                <p class="desc-content mb-5">{!! $product->description_product !!}</p>
                                <div class="quantity-with_btn mb-5">
                                    <div class="quantity">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" name="qty" value="1" min="1" type="number">
                                            <div class="dec qtybutton">-</div>
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </div>
                                    <div class="add-to_cart">
                                        @auth
                                            <a class="btn flosun-button secondary-btn secondary-border rounded-0" id="buttton_order" onclick="add_cart('#buttton_order','#form_order','{{route('user.cart.store')}}','Add to Cart','{{$product->id}}');" href="javascript:;">Tambah Produk!</a>
                                        @endauth
                                        @guest
                                            <a class="btn flosun-button secondary-btn secondary-border rounded-0" id="buttton_order"  href="{{route('user.auth.index')}}">Tambah Produk!</a>
                                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
               
                <div class="row mt-no-text">
                    <div class="col-lg-12 col-custom">
                        @php
                            $review = \App\Models\Review::join('products','reviews.id_product','=','products.id')
                                        ->where('reviews.id_product', '=', $product->id)->count();
                        @endphp
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#connect-1" role="tab" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#connect-2" role="tab" aria-selected="false">Reviews ({{$review}})</a>
                            </li>
                        </ul>
                        <div class="tab-content mb-text" id="myTabContent">
                            <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                                
                                <div class="desc-content">
                                    <p class="mb-3">
                                        {!! $product->description_product !!}
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                                @php
                                    $reviews = \App\Models\Review::join('products','reviews.id_product','=','products.id')
                                                ->where('reviews.id_product', '=', $product->id)->get();
                                @endphp
                                <div class="product_tab_content  border p-3">
                                    <div class="review_address_inner">
                                        @foreach($reviews as $item)     
                                        <div class="pro_review mb-5">
                                                <img alt="review images" src="{{asset('img/admin/blank.png')}}" width="10%" height="10%">
                                            <div class="review_details">
                                                <div class="review_info mb-2">
                                                    <h5>{{$item->users->name}} - <span> {{$item->created_at}}</span></h5>
                                                </div>
                                                <p>{{$item->review}}</p>
                                                @if($item->rating == 5)
                                                <section class="rating">
                                                    <label>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                    </label>
                                                </section>
                                                @elseif($item->rating == 4)
                                                <section class="rating">
                                                    <label>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                    </label>
                                                </section>
                                                @elseif($item->rating == 3)
                                                <section class="rating">
                                                    <label>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                    </label>
                                                </section>
                                                @elseif($item->rating == 2)
                                                <section class="rating">
                                                    <label>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                    </label>
                                                </section>
                                                @elseif($item->rating == 1)
                                                <section class="rating">
                                                    <label>
                                                        <span class="icon kuning" style="color: rgb(221, 221, 79) !important;">★</span>
                                                    </label>
                                                </section>
                                                @endif
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    @if(Auth::check())
                                    <div class="comments-area comments-reply-area">
                                        <div class="row">
                                            <div class="col-lg-12 col-custom">
                                                <form class="comment-form-area" id="kt_ecommerce_add_product_form">
                                                    <label>Tambahkan Review Anda</label>
                                                <section class="rating">
                                                    <label>
                                                        <input type="radio" name="stars" value="1" />
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="2" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="3" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>   
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="4" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="stars" value="5" />
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                        <span class="icon">★</span>
                                                    </label>
                                                </section>
                                                    <div class="comment-form-comment mb-3">
                                                        
                                                        <textarea class="comment-notes" required="required" name="review"></textarea>
                                                    </div>
                                                    <div class="comment-form-submit">
                                                        <button class="btn flosun-button secondary-btn black-color rounded-0 w-100" type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_save('#kt_ecommerce_add_product_submit','#kt_ecommerce_add_product_form','{{route('review.store',$product->id)}}','POST');">Kirim</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-webLayout>
@section('custom_js')
<script>
    $(':radio').change(function() {
        console.log('New star rating: ' + this.value);
    });
</script>
@endsection