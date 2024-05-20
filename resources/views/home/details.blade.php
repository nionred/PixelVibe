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
        <!-- header section starts -->
        @include('home.header')

        <!-- product details -->
        <section class="shop_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>Latest Arts</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-10">
                        <div class="div_cen">
                            <img width="400" src="/arts/{{$data->image}}" alt="{{$data->title}}">
                        </div>
                        <div class="detail-box">
                            <h6>{{$data->title}}</h6>
                            <h6>Price: <span>${{$data->price}}</span></h6>
                        </div>
                        <div class="detail-box">
                            <h6>Category: {{$data->category}}</h6>
                        </div>
                        <div class="detail-box">
                            <p>Artist: {{$data->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('home.footer')
    </div>
</body>

</html>
