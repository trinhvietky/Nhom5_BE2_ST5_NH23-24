@extends('app')
@section('content')


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Khách hàng nói gì về chúng tôi ?</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Trang</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Đánh giá</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            @foreach($data_comment as $row)
            <div class="col-lg-2 wow fadeInUp mt-0 mb-0" data-wow-delay="0.1s" style="min-height: 200px;">
                <div class="position-relative h-20">
                    <img class="img-fluid position-absolute" src="{{asset('img/' . $row->client_image)}}" alt="" style="width: 200px; height: 200px;">
                    <hr>
                </div>
            </div>
            <div class="col-lg-10 wow fadeInUp mt-3 mb-0" data-wow-delay="0.3s">
                <h1 class="mb-4"><span class="text-primary">{{$row->client_name}}</span></h1>
                <h3 class="mb-4"><span class="text-primary">{{$row->client_address}}</span></h3>
                <p class="mb-0" style="font-size: 25px;">{{$row->client_comment}}</p>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>
<!-- About End -->


<!-- Testimonial Start -->
<!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h1 class="text-center text-primary px-3">Khách hàng nói gì? </h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item bg-white text-center border p-4">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">John Doe</h5>
                <p>New York, USA</p>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">John Doe</h5>
                <p>New York, USA</p>
                <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">John Doe</h5>
                <p>New York, USA</p>
                <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-white text-center border p-4">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                <h5 class="mb-0">John Doe</h5>
                <p>New York, USA</p>
                <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
        </div>
    </div>
</div> -->
<!-- Testimonial End -->

@endsection