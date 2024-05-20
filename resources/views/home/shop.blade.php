
<!DOCTYPE html>
<html>

<head>
    @include('home.css')
    <style type="text/css">
        .div_cen {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .detail-box {
            padding: 16px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        @include('home.header')

        <section class="shop_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Latest Arts
                    </h2>
                </div>
                <div class="row">
                    @if(isset($products) && $products->count() > 0)
                        @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="box">
                                <div class="img-box">
                                    <img src="arts/{{$product->image}}" alt="{{ $product->title }}">
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{$product->title}}
                                    </h6>
                                    <h6>
                                        Price
                                        <span>
                                            ${{$product->price}}
                                        </span>
                                    </h6>
                                </div>
                                <div style="padding: 10px">
                                    <a class="btn btn-danger" href="{{ url('details', $product->id) }}">Details</a>
                                    <a class="btn btn-primary" href="{{ url('add', $product->id) }}">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <p>No products available.</p>
                    @endif
                </div>
            </div>
        </section>

        @include('home.footer')
    </div>
</body>

</html>
