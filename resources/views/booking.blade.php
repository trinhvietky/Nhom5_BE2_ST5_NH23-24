@extends('app')
@section('content')


<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Đặt chuyến</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Trang</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Đặt chuyến</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

<!-- Booking Start -->
<div class="container-xxl py-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-6">
                <div class="booking p-5">
                    <div class="tour-details text-dark">
                        <h2 class="tour-name display-6" style="position: relative; top: -20px;">Tên tour: Cột Cờ Lũng Cú</h2>
                        <img class="tour-image" src="img/cotCoLungCu.jpg" alt="Ảnh Tour">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="start-day" style="font-size: 20px; font-weight: 800; margin: 10px 0;">Ngày bắt đầu: 01/01/2024</p>
                            </div>
                            <div class="col-md-6">
                                <p class="end-day" style="font-size: 20px; font-weight: 800; margin: 10px 0;">Ngày kết thúc: 07/01/2024</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="start-day" style="font-size: 20px; font-weight: 800;">Thời gian: 2 ngày 1 đêm</p>
                            </div>
                        </div>
                        <p class="price" style="font-size: 20px; font-weight: 800;">Giá: 5.000.000Đ</p>
                        <p class="vehicle" style="font-size: 20px; font-weight: 800;">Phương tiện: Xe hơi</p>
                        <p class="mb-4" style="font-size: 20px; font-weight: 800;">Chi tiết: Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="booking p-5">
                    <h1 class="text-dark mb-4 display-5">Đặt một chuyến du lịch</h1>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                                    <label for="name">Họ tên</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                    <label for="datetime">Ngày/tháng/năm</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-transparent" id="select1">
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 2</option>
                                        <option value="3">Destination 3</option>
                                    </select>
                                    <label for="select1">Destination</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-dark w-100 py-3 display-2" type="submit">Đặt ngay</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Gói</h6>
                <h1 class="mb-5">Gói tuyệt vời</h1>
            </div>
            <div class="row g-4 justify-content-center">
            @foreach($data as $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" style="width: 600px; height: 250px" src="{{ asset('img/'.$row->tour_image) }}" alt="">
                    </div>
                    <div class="d-flex border-bottom">
                        <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $row->tour_name}}</small> -->
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $row->start_day}} -> {{ $row->end_day}}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$row->location->location_name}}</small>
                    </div>
                    <div class="text-center p-1">
                        <div class=" text-sm text-primary fw-bold flex-fill text-center py-1" style="font-size: 30px;"></i>{{ $row->tour_name}}</div>
                            <h3 class="mb-0">{{ $row->price}}$</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <p style="height: 150px;">Nằm trên ngọn đồi với khung cảnh tuyệt đẹp, {{ $row->tour_name}} là điểm đến nổi tiếng ở {{$row->location->location_name}} với những kiến trúc độc đáo, hệ thống cáp treo hàng đầu thế giới và các hoạt động giải trí phong phú cho du khách mọi lứa tuổi.</p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="#" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Xem thêm</a>
                                <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Đặt ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Booking Start -->


@endsection