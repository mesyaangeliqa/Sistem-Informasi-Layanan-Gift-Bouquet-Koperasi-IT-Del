<form id="form_order">
    <div class="row">
        <div class="col-lg-12 col-custom">
            <!-- Cart Table Area -->
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="pro-thumbnail">No</th>
                            <th class="pro-thumbnail">Image</th>
                            <th class="pro-title">Product</th>
                            <th class="pro-price">Price</th>
                            <th class="pro-quantity">Quantity</th>
                            <th class="pro-subtotal">Total</th>
                            <th class="pro-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                            @auth
                            @if($collection->count() > 0)
                                @foreach($collection as $key => $item)
                                    <tr>
                                        <td class="pro-price">{{$key+1}}</td>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{asset($item->product->image)}}" alt="Product" /></a></td>
                                        <input type="hidden" name="total" value="{{$count}}">
                                        <input type="hidden" name="total_price" value="{{$item->product->price_product * $item->qty}}">
                                        <td class="pro-title"><a href="#">{{$item->product->name_product}}</a></td>
                                        <td class="pro-price"><span>Rp. {{number_format($item->product->price_product)}}</span></td>
                                        <td class="pro-price"><span>{{$item->qty}}</span></td>
                                        <td class="pro-subtotal"><span>Rp. {{number_format($item->product->price_product * $item->qty)}}</span></td>
                                        <td class="pro-remove"><a href="javascript:;" onclick="handle_delete('{{route('user.cart.destroy', $item->id)}}')"><i class="lnr lnr-trash"></i></a></td>
                                    </tr>
                                @endforeach
                            @endauth
                            @else
                            <tr>
                                <td>
                                    No data
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- Cart Update Option -->
            <div class="cart-update-option d-block d-md-flex justify-content-between">
                <div class="apply-coupon-wrapper">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 ml-auto col-custom">
            <!-- Cart Calculation Area -->
            <div class="cart-calculator-wrapper">
                <div class="cart-calculate-items">
                    <h3>Cart Totals</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <tr class="total">
                                <td>Total</td>
                                <td class="total-amount">{{ number_format($count)}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <button class="btn flosun-button secondary-btn black-color rounded-0 w-100" type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_save('#kt_ecommerce_add_product_submit','#form_order','{{ route('user.orders.store')}}','POST');">Order Now!</button>
            </div>
        </div>
    </div>
</form>