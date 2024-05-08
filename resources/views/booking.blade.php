@extends('app')
@section('content')

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
                            <li class="breadcrumb-item text-white active" aria-current="page">Giới thiệu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/'.$value->tour_image) }}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-4 text-primary">{{ $value->tour_name }} </h1>
                <p class="mb-4">{{ $value->tour_description }}</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-calendar-alt text-primary me-2"></i>Ngày bắt đầu: {{ $value->start_day}}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-clock text-primary me-2"></i>Thời gian: {{ $value->time}}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-plane-departure text-primary me-2"></i>Nơi khởi hành: {{ $value->star_from }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-bus text-primary me-2"></i>Phương tiện: {{ $value->vehicle }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-hotel text-primary me-2"></i>Khách sạn: Khách sạn 5 sao </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-gifts text-primary me-2"></i>Đã bao gồm ưu đãi trong giá tour</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-money-check text-primary me-2"></i>Giá tour / 1 người</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0 text-danger"><i class=""></i>{{ number_format($value->price, 0, ',', '.')}} vnd</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Số lượng người: </p>
                    </div>
                    <!-- <div class="col-sm-6">
                        <div class="quantity buttons_added">
                            <input id="#" name="quantity" style="text-align: center;" type="number" size="4" class="input-text qty text border-1" title="Qty" value="1" min="0" step="1" >
                        </div>

                    </div>
                    <td class="product-subtotal">
                        <span class="amount" id="">{{number_format( $value->price * $value['quantity'],0, ',', '.')}} vnđ</span>
                    </td> -->

                    <div class="col-sm-6">
                        <div class="quantity buttons_added">
                            <input id="quantityInput" style="text-align: center;" type="number" size="4" class="input-text qty text border-1" title="Qty" value="0" min="0" step="1">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-money-check text-primary me-2"></i>Thành tiền</p>
                    </div>
                    <div class="col-sm-6">
                        <td class="product-subtotal ">
                            <span class="amount mb-0 text-danger" id="subtotal">0 vnđ</span>
                        </td>
                    </div>


                </div>
                <a id="bookingButton" class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Đặt ngay</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Lịch trình cụ thể</h1>
        </div>
    </div>
    <div style="color: black; font-weight: 400; font-size: 17px;">
        {!! $value->tour_schedule !!}
    </div>
</div>
<!-- Team End -->

<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Tour phổ biến </h1>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($data->take(6) as $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" style="width: 600px; height: 250px" src="{{ asset('img/'.$row->tour_image) }}" alt="">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">{{$row->tour_sale}}</div>
                    </div>
                    <div class="d-flex border-bottom" style="height: 50px;">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $row->start_day}}</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{ $row->time}}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-plane-departure text-primary me-2"></i>{{$row->star_from}}</small>
                    </div>
                    <h4 class=" text-primary fw-bold flex-fill text-center py-2" style="height: 50px;">{{ $row->tour_name}}</h4>
                    <div class="text-center pt-2">

                        <h5 class="mb-0 text-danger">{{number_format($row->price, 0, ',', '.')}} vnđ</h5>

                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <?php
                        $tourDescription = $row->tour_description;

                        // Chia chuỗi thành mảng các từ
                        $words = explode(' ', $tourDescription);

                        // Lấy 100 từ đầu tiên
                        $mota = implode(' ', array_slice($words, 0, 50));
                        ?>
                        <p style="height: 130px;">{{$mota}} ... </p>
                        <div class="d-flex justify-content-center mb-2 pb-2">
                            <a href="{{ route('tourShow.booking', $row->tour_id) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Xem thêm</a>
                            <a href="{{ route('tourShow.booking', $row->tour_id) }}" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Package End -->
<script>
    document.getElementById('quantityInput').addEventListener('input', function() {
        var quantity = parseInt(this.value);
        var price = parseFloat("{{$value->price}}");
        var subtotal = quantity * price;
        document.getElementById('subtotal').textContent = formatCurrency(subtotal) + ' vnđ';
    });

    function formatCurrency(amount) {
        return amount.toFixed(0).replace(/\d(?=(\d{3})+$)/g, '$&,');
    }

    document.getElementById("bookingButton").addEventListener("click", function(event) {
        event.preventDefault();
            alert("Bạn cần đăng nhập để đặt vé.");

    });
</script>
@endsection