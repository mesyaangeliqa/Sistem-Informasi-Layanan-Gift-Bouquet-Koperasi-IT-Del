
    {{-- <div id="shop" class="shop row grid-container gutter-20" data-layout="fitRows">
        @foreach ($collection as $item)
        <div class="product col-md-4 col-sm-6 sf-{{ $item->id_product_category }}">
            <div class="grid-inner">
                <div class="product-image">
                    <a href="{{ route('product.show',$item->id) }}"><img src="{{ asset($item->image_product) }}" height="350px" ></a>
                    <a href="{{ route('product.show',$item->id) }}"><img src="{{ asset($item->image_product) }}" height="350px"></a>
                </div>
                <div class="product-desc">
                    <div class="product-title"><h3><a href="{{ route('product.show',$item->id) }}">{{ $item->name_product }}</a></h3></div>
                    <div class="product-price">Rp. {{ $item->price_product }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div> --}}

    <div class="row shop_wrapper grid_4">
        @foreach ($collection as $item)
        <div class="col-lg-3 col-md-6 col-sm-6  col-custom product-area">
            <div class="product-item">
                <div class="single-product position-relative mr-0 ml-0">
                    <div class="product-image">
                        <a class="d-block" href="{{ route('product.show',$item->id) }}">
                            <img src="{{ asset($item->image) }}"  alt="" class="product-image-2 position-absolute " height="350px">
                            <img src="{{ asset($item->image) }}" alt="" class="product-image-1 " height="350px">
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="product-title">
                            <h4 class="title-2"> <a href="{{ route('product.show',$item->id) }}">{{ $item->name_product }}</a></h4>
                        </div>
                        @php
                            $rating = \App\Models\Review::where('id_product', $item->id)->avg('rating');
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
                        <div class="price-box">
                            <span class="regular-price ">Rp. {{ $item->price_product }}</span>
                        </div>
                        <a href="{{ route('product.show',$item->id) }}" class="btn product-cart">View . . .</a>
                    </div>
                    <div class="product-content-listview">
                        <div class="product-title">
                            <h4 class="title-2"> <a href="{{ route('product.show',$item->id) }}">{{ $item->name_product }}</a></h4>
                        </div>
                        @php
                            $rating = \App\Models\Review::where('id_product', $item->id)->avg('rating');
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
                        <div class="price-box">
                            <span class="regular-price ">Rp. {{ $item->price_product }}</span>
                        </div>
                        <p class="desc-content">{!! $item->description_product !!}</p>
                        <div class="button-listview">
                            <a href="{{ route('product.show',$item->id) }}" class="btn flosun-button secondary-btn rounded-0"> Pesan Sekarang! </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
{{ $collection->links('theme.web.pagination') }}