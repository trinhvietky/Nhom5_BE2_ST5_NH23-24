@extends('user.app1')
@section('content1')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Discovery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">trang</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Đặt vé</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->




<div class="container-xxl py-5">
    <div class="list-group ">
        @foreach($booking as $value)
        <div class="row list-group-item d-flex list-group-item-action mb-4" style="margin: auto; border-top-width: 1px;">
            <div class="col-sm-3">
                <img class="img-fluid w-100 h-100" src="{{ asset('img/'.$tours[$value->booking_tour_id]->tour_image) }}" alt="" style="object-fit: cover;">
            </div>
            <div class="col-sm-9">

                <div class="row gy-2 gx-4 mb-2">
                    <div class="col-sm-9">
                        <h3 class="mb-2 text-primary">{{ $tours[$value->booking_tour_id]->tour_name}} </h3>
                    </div>
                    <div class="col-sm-3">
                        <p class="mb-0 "><i class="fa fa-history text-primary me-2"></i>Ngày đặt: {{date_format($value->created_at,"d/m/Y ")}} </p>
                    </div>
                    <div class="col-sm-3">
                        <p class="mb-0"><i class="fa fa-calendar-alt text-primary me-2"></i>Ngày bắt đầu: {{ $tours[$value->booking_tour_id]->start_day}}</p>
                    </div>
                    <div class="col-sm-3">
                        <p class="mb-0"><i class="fa fa-clock text-primary me-2"></i>Thời gian: {{ $tours[$value->booking_tour_id]->time}}</p>
                    </div>
                    <div class="col-sm-3">
                        <p class="mb-0"><i class="fa fa-plane-departure text-primary me-2"></i>Nơi khởi hành: {{ $tours[$value->booking_tour_id]->star_from }}</p>
                    </div>
                    <div class="col-sm-3">
                        <p class="mb-0"><i class="fa fa-bus text-primary me-2"></i>Phương tiện: {{ $tours[$value->booking_tour_id]->vehicle }}</p>
                    </div>
                </div>
                <p class="mb-2">{{ $tours[$value->booking_tour_id]->tour_description }}</p>
                <div class="row gy-2 gx-4 mb-2">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Số lượng người: {{$value->booking_customer_quantity}}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-money-check text-primary me-2"></i>Thành tiền: {{number_format($value->booking_amount, 0, ',', '.')}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection