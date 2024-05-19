@extends('user.app1')
@section('content1')


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Tour yêu thích</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Trang</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">yêu thích</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Có phải bạn đang yêu thích những Tour sau đây hông</h6>
            <h1 class="mb-5">tour yêu thích của bạn là</h1>
        </div>
        <div class="row g-4">
            @foreach($favoriteTours as $favoriteTour)
            @if($favoriteTour->tour && $favoriteTour->tour->tour_image)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/' . $favoriteTour->tour->tour_image)}}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <!-- Các nút chia sẻ -->
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="text-center p-4">
                        <!-- Tên tour -->
                        <h5 class="mb-0">{{$favoriteTour->tour->tour_name}}</h5>
                    </div>
                    <div class="d-flex border">
                        <!-- Số điện thoại hướng dẫn viên -->
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-phone text-primary me-2"></i>{{ $favoriteTour->tour->guide->guide_Pno}}</small>
                        <!-- Email hướng dẫn viên -->
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-envelope text-primary me-2"></i>{{ $favoriteTour->tour->guide->guide_Mail}}</small>
                    </div>
                    <div class="text-center">
                        <!-- Mô tả tour -->
                        <p>{{$favoriteTour->tour->tour_description}}</p>
                        <!-- Liên kết đến trang chi tiết tour -->
                        <a href="{{ route('user.tour.readmore', $favoriteTour->tour->tour_id) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Đặt ngay</a>

                    </div>
                </div>
            </div>
            @endif
            @endforeach



        </div>
    </div>
</div>
<!-- Team End -->


@endsection