@extends('app')
@section('content')


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Dịch vụ</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Trang</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Dịch vụ</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Dịch vụ của chúng tôi</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5>Vòng quanh thế giới</h5>
                        <p>Đưa bạn đến với những địa điểm mới lạ trên toàn thế giới</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                        <h5>Đặt phòng khách sạn</h5>
                        <p>Khách sạn 5* được đánh giá tốt nhất trên thế giới</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user text-primary mb-4"></i>
                        <h5>Hướng dẫn viên du lịch</h5>
                        <p>Thân thiện, hòa đồng và đồng hành trong suốt hành trình của bạn</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                        <h5>Quản lý sự kiện</h5>
                        <p>Những sự kiện, hoạt động trong suốt hành trình của bạn</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h1 class="text-center text-primary px-3">Khách hàng nói gì? </h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            @foreach($data_comment->take(5) as $row)
            <div class="testimonial-item bg-white text-center border p-4">
                <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3 img-fluid " src="{{asset('img/' . $row->client_image)}}" style="width: 100px; height: 100px;">
                <h5 class="mb-0">{{$row->client_name}}</h5>
                <p>{{$row->client_address}}</p>
                <p class="mb-0">{{$row->client_comment}}</p>
            </div>
            @endforeach
        </div>
        <!--nút show danh sách -->
        <div class="row justify-content-center py-3">
            <div class="col-auto">
                <a class="btn btn-primary rounded-pill py-3 px-4 mt-2" href="{{ url('/testimonial') }}">Xem thêm ...</a>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


@endsection