@extends('admin.app2')
@section('content2')

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Thông tin tour list của Admin</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Thêm, xóa, sửa thông tin tour list</p>
                <div class="position-relative w-75 mx-auto animated slideInDown">
                    <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg: Thailand">
                    <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="d-flex justify-content-center">
        <div class="container" style="width: 70%;">
            <h5 class="display-3 text-primary text-center mb-3 animated slideInDown">Thêm Tour</h5>
            <form action="{{ route('tours.store') }}" method="POST">
                @csrf
                <!-- <div class="mb-3">
                    <label for="tour_id" class="form-label">Tour ID</label>
                    <input type="text" class="form-control" id="tour_id" name="tour_id">
                </div> -->
                <input type="text" name="tour_name" placeholder="Tên tour">
                <div class="mb-3">
                    <label for="image" class="form-label text-primary text-xl">Hình ảnh tour</label>
                    <input type="file" class="form-control" id="tour_image" name="tour_image">
                </div>

                <input type="date" name="start_day" placeholder="Ngày bắt đầu">
                <input type="text" name="time" placeholder="Thời gian">
                <input type="text" name="star_from" placeholder="Nơi khởi hành">
                <input type="text" name="price" placeholder="Giá tour">
                <input type="text" name="vehicle" placeholder="Phương tiện di chuyển">
                <textarea name="tour_description" placeholder="Giới thiệu tour"></textarea>
                <textarea name="tour_schedule" placeholder="Lịch trình tour"></textarea>
                <input type="text" name="tour_sale" placeholder="Giảm giá tour">
                <input type="number" name="location_id" placeholder="Location ID">
                <input type="number" name="guide_id" placeholder="Guide ID">

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    
                </div>
            </form>
        </div>
    </div>
</div>


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Tour name</th>
                            <th class="text-center" scope="col">Image</th>
                            <th class="text-center" scope="col">Start day</th>
                            <th class="text-center" scope="col">Time</th>
                            <th class="text-center" scope="col">Start from</th>
                            <th class="text-center" scope="col">Price</th>
                            <th class="text-center" scope="col">Vehicle</th>
                            <th class="text-center" scope="col">Description</th>
                            <th class="text-center" scope="col">Schedule</th>
                            <th class="text-center" scope="col">Location ID</th>
                            <th class="text-center" scope="col">Guide ID</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $row)
                        <tr>
                            <td class="text-center">{{ $row->tour_id}}</td>
                            <td>{{ $row->tour_name}}</td>
                            <td class="text-center"><img class="img-fluid"  src="{{ asset('img/'.$row->tour_image) }}" alt=""></td>
                            <td class="text-center">{{ $row->start_day}}</td>
                            <td class="text-center">{{ $row->time}}</td>
                            <td class="text-center">{{ $row->star_from}}</td>
                            <td class="text-center">{{ $row->price}}</td>
                            <td class="text-center">{{ $row->vehicle}}</td>
                            <?php
                        $tourDescription = $row->tour_description;

                        // Chia chuỗi thành mảng các từ
                        $words = explode(' ', $tourDescription);
                        
                        // Lấy 100 từ đầu tiên
                        $mota = implode(' ', array_slice($words, 0, 20));
                        ?>
                            <td class="text-center">{{ $mota}}</td>
                            <?php
                        $tourSchedule = $row->tour_schedule;

                        // Chia chuỗi thành mảng các từ
                        $words1 = explode(' ', $tourSchedule);
                        
                        // Lấy 100 từ đầu tiên
                        $schedule = implode(' ', array_slice($words1, 0, 20));
                        ?>
                            <td class="text-center">{{$schedule}}</td>
                            <td class="text-center">{{ $row->location_id}}</td>
                            <td class="text-center">{{ $row->guide_id}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection