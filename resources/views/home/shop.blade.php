
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
   

        <section class="shop_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Latest Arts
                    </h2>
                </div>
                <div class="row">
                   
                        @foreach($product as $products)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="box">
                                <div class="img-box">
                                    <img src="arts/{{$products->image}}" alt=>
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        {{$products->title}}
                                    </h6>
                                    <h6>
                                        Price
                                        <span>
                                            ${{$products->price}}
                                        </span>
                                    </h6>
                                </div>
                                <div style="padding: 10px">
                                    <a class="btn btn-danger" href="{{ url('details', $products->id) }}">Details</a>
                                    <a class="btn btn-primary" href="{{ url('add', $products->id) }}">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    
                   
                </div>
            </div>
        </section>

        @include('home.footer')
    </div>
</body>

</html>
