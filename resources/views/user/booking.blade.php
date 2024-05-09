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
                            <li class="breadcrumb-item text-white active" aria-current="page">Giới thiệu</li>
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

                    <!-- <div class="col-sm-6">
                        <div class="quantity buttons_added">
                            <input id="#" name="quantity" style="text-align: center;" type="number" size="4" class="input-text qty text border-1" title="Qty" value="1" min="0" step="1" >
                        </div>

                    </div>
                    <td class="product-subtotal">
                        <span class="amount" id="">{{number_format( $value->price * $value['quantity'],0, ',', '.')}} vnđ</span>
                    </td> -->

                    <form action="{{route('booking.store', [$value->tour_id,Auth::user()->id] )}}" class="row gy-2 gx-4 mb-4" method="post">
                        @csrf
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Số lượng người: </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="quantity buttons_added">
                                <input name="booking_quantity" id="quantityInput" style="text-align: center;" type="number" size="4" class="input-text qty text border-1" title="Qty" value="0" min="0" step="1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-phone text-primary  me-2"></i>Số điện thoại: </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="quantity buttons_added">
                                <input name="booking_customer_phone" id="quantityInput" type="text" class="input-text qty text border-1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Voucher: </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 text-danger" id="voucher"></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-money-check text-primary me-2"></i>Thành tiền</p>
                        </div>
                        <div class="col-sm-6">
                            <td class="product-subtotal ">
                                <span class="amount mb-0 text-danger" id="subtotal">0 vnđ</span>
                            </td>
                        </div>
                        <button name="redirect" id="bookingButton" class="col-sm-4 btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Đặt ngay</button>
                    </form>


                </div>

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
            <h6 class="section-title bg-white text-center text-primary px-3">Gói {{ $user_main->name }}</h6>
            <h1 class="mb-5">Gói tuyệt vời</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($data as $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" style="width: 600px; height: 250px" src="{{ asset('img/'.$row->tour_image) }}" alt="">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">{{$row->tour_sale}}</div>
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $row->start_day}}</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{ $row->time}}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-plane-departure text-primary me-2"></i>{{$row->star_from}}</small>
                    </div>
                    <div class="text-center p-1">
                        <div class=" text-sm text-primary fw-bold flex-fill text-center py-2" style="font-size: 20px;"></i>{{ $row->tour_name}}</div>
                        <h3 class="mb-0">{{ $row->price}} vnd</h3>
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
                        <p style="height: 150px;">{{$mota}} ... </p>

                        <p class="text-danger" style="font-size: 20px; font-weight: bold;">Số chỗ còn trống: {{$row->total_seats - $row->booked_seats}} chỗ</p>

                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route('user.tour.readmore', $row->tour_id) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Xem thêm</a>
                            <a href="{{ route('user.tour.readmore', $row->tour_id) }}" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Đặt ngay</a>
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
        let voucher = 0;
        if (quantity == 0) {

            document.getElementById('voucher').textContent = '';
        }
        if (quantity == 1) {
            voucher = 0.9;
            document.getElementById('voucher').textContent = 'Giảm giá 10%';
        } else if (quantity == 2) {
            voucher = 0.85;
            document.getElementById('voucher').textContent = 'Giảm giá 15%';
        } else {
            voucher = 0.8;
            document.getElementById('voucher').textContent = 'Giảm giá 20%';
        }

        if (quantity == 0) {

            document.getElementById('voucher').textContent = '';
        }

        var subtotal = quantity * price * voucher;
        document.getElementById('subtotal').textContent = formatCurrency(subtotal) + ' vnđ';
    });

    function formatCurrency(amount) {
        return amount.toFixed(0).replace(/\d(?=(\d{3})+$)/g, '$&,');
    }
</script>
<!-- Navbar & Hero End -->
<div class="container mt-5">
    <h2 class="mb-4 text-center"><span class="text-primary">Hãy cho chúng tôi biết bạn cảm thấy dịch vụ của chúng tôi như thế nào?</span></h2>
    <form method="POST" action="{{ route('submit_comment') }}">
        @csrf
        <!-- <div class="mb-3">
            <label for="name" class="form-label text-primary" style="font-weight: bold; font-size: 25px;">Họ và tên của bạn</label>
            <input type="text" class="form-control" name="client_name" id="name">
        </div> -->
        <input type="hidden" name="tour_id" id="tour_id" value="{{ $value->tour_id }}">
        <div class="mb-3">
            <label for="province" class="form-label text-primary" style="font-weight: bold; font-size: 25px;">Bạn đến từ đâu</label>
            <select class="form-select" id="province" name="client_address">
                <option value="">Chọn tỉnh/Thành phố</option>
                <option value="Hà Nội">Hà Nội</option>
                <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                <option value="Đà Nẵng">Đà Nẵng</option>
                <option value="Hải Phòng">Hải Phòng</option>
                <option value="Cần Thơ">Cần Thơ</option>
                <option value="An Giang">An Giang</option>
                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                <option value="Bắc Giang">Bắc Giang</option>
                <option value="Bắc Kạn">Bắc Kạn</option>
                <option value="Bạc Liêu">Bạc Liêu</option>
                <option value="Bắc Ninh">Bắc Ninh</option>
                <option value="Bến Tre">Bến Tre</option>
                <option value="Bình Định">Bình Định</option>
                <option value="Bình Dương">Bình Dương</option>
                <option value="Bình Phước">Bình Phước</option>
                <option value="Bình Thuận">Bình Thuận</option>
                <option value="Cà Mau">Cà Mau</option>
                <option value="Cao Bằng">Cao Bằng</option>
                <option value="Đắk Lắk">Đắk Lắk</option>
                <option value="Đắk Nông">Đắk Nông</option>
                <option value="Điện Biên">Điện Biên</option>
                <option value="Đồng Nai">Đồng Nai</option>
                <option value="Đồng Tháp">Đồng Tháp</option>
                <option value="Gia Lai">Gia Lai</option>
                <option value="Hà Giang">Hà Giang</option>
                <option value="Hà Nam">Hà Nam</option>
                <option value="Hà Tĩnh">Hà Tĩnh</option>
                <option value="Hải Dương">Hải Dương</option>
                <option value="Hậu Giang">Hậu Giang</option>
                <option value="Hòa Bình">Hòa Bình</option>
                <option value="Hưng Yên">Hưng Yên</option>
                <option value="Khánh Hòa">Khánh Hòa</option>
                <option value="Kiên Giang">Kiên Giang</option>
                <option value="Kon Tum">Kon Tum</option>
                <option value="Lai Châu">Lai Châu</option>
                <option value="Lâm Đồng">Lâm Đồng</option>
                <option value="Lạng Sơn">Lạng Sơn</option>
                <option value="Lào Cai">Lào Cai</option>
                <option value="Long An">Long An</option>
                <option value="Nam Định">Nam Định</option>
                <option value="Nghệ An">Nghệ An</option>
                <option value="Ninh Bình">Ninh Bình</option>
                <option value="Ninh Thuận">Ninh Thuận</option>
                <option value="Phú Thọ">Phú Thọ</option>
                <option value="Quảng Bình">Quảng Bình</option>
                <option value="Quảng Nam">Quảng Nam</option>
                <option value="Quảng Ngãi">Quảng Ngãi</option>
                <option value="Quảng Ninh">Quảng Ninh</option>
                <option value="Quảng Trị">Quảng Trị</option>
                <option value="Sóc Trăng">Sóc Trăng</option>
                <option value="Sơn La">Sơn La</option>
                <option value="Tây Ninh">Tây Ninh</option>
                <option value="Thái Bình">Thái Bình</option>
                <option value="Thái Nguyên">Thái Nguyên</option>
                <option value="Thanh Hóa">Thanh Hóa</option>
                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                <option value="Tiền Giang">Tiền Giang</option>
                <option value="Trà Vinh">Trà Vinh</option>
                <option value="Tuyên Quang">Tuyên Quang</option>
                <option value="Vĩnh Long">Vĩnh Long</option>
                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                <option value="Yên Bái">Yên Bái</option>
            </select>

        </div>

        <div class="mb-3">
            <label for="commentContent" class="form-label text-primary" style="font-weight: bold; font-size: 25px;">Bạn đang nghĩ gì?</label>
            <textarea class="form-control" id="commentContent" name="client_comment" rows="3"></textarea>
        </div>


        <div class="mb-3">
            <label for="fileUpload" class="form-label text-primary" style="font-weight: bold; font-size: 25px;">Chọn một tấm ảnh của bạn mà bạn ưng ý nhất</label>
            <input type="file" class="form-control" id="fileUpload" name="client_image" accept="image/*">
        </div>
        <div class="row justify-content-center py-3">
            <div class="col-auto">
                <button type="submit" class="btn btn-primary rounded-pill mt-3 mb-3">Gửi Bình Luận</button>
            </div>
        </div>

    </form>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            @foreach($data_comment as $row)
            @if($value->tour_id == $row->tour_id)
            <div class="col-lg-2 wow fadeInUp mt-0 mb-0" data-wow-delay="0.1s" style="min-height: 200px;">
                <div class="position-relative h-20">
                    <img class="img-fluid position-absolute" src="{{ asset('img/' . $row->client_image) }}" alt="" style="width: 200px; height: 200px;">
                    <hr>
                </div>
            </div>
            <div class="col-lg-10 wow fadeInUp mt-3 mb-0" data-wow-delay="0.3s">
                <h1 class="mb-4"><span class="text-primary">{{ $row->client_name }}</span></h1>
                <h3 class="mb-4"><span class="text-primary">{{ $row->client_address }}</span></h3>
                <p class="mb-0" style="font-size: 25px;">{{ $row->client_comment }}</p>
            </div>
            <hr>
            @endif
            @endforeach

        </div>
    </div>
</div>
@endsection