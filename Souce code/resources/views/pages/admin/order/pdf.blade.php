<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            table {
                width: 700px;
            }
            table, th, td {
                border: solid 1px #DDD;
                border-collapse: collapse;
                padding: 2px 3px;
                text-align: center;
            }
        </style>
    </head>
    @php
        date_default_timezone_set("Asia/Jakarta");
    @endphp
    <body>
        <div id="tab">
            <center>
                <h1>Gift Del Bouquet</h1><h4>Order Details</h4> 
                <h5>{{ date("h:i:s, Y-m-d") }}</h5>
            </center>
            <table> 
                <tr>
                    <th class="pro-thumbnail">No</th>
                    <th class="pro-thumbnail">Image</th>
                    <th class="pro-title">Product</th>
                    <th class="pro-price">Price</th>
                    <th class="pro-quantity">Quantity</th>
                    <th class="pro-subtotal">Total</th>
                </tr>
                @foreach($show as $key => $item)
                <tr>
                    <td class="pro-price">{{$key+1}}</td>
                    <td class="pro-thumbnail"><img class="img-fluid" src="{{ public_path('storage/'.$item->image_product) }}" width="100px" height="100px"/></td>
                    <td class="pro-title">{{$item->name_product}}</td>
                    <td class="pro-price"><span>Rp. {{number_format($item->price_product)}}</span></td>
                    <td class="pro-price"><span>{{$item->qty}}</span></td>
                    <td class="pro-subtotal"><span>Rp. {{number_format($item->price_product * $item->qty)}}</span></td>
                </tr>
                @endforeach
                
            </table>
            <br><br>
            <table>
                <tr>
                    <th>Total Harga</th>
                    <td>{{ number_format($item->total) }}</td>
                </tr>
            </table>
        </div>
    </body>
</html>