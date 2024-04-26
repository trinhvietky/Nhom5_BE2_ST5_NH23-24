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
            <form action="" method="post">
                @csrf
                <!-- <div class="mb-3">
                    <label for="tour_id" class="form-label">Tour ID</label>
                    <input type="text" class="form-control" id="tour_id" name="tour_id">
                </div> -->
                <div class="mb-3">
                    <label for="tour_name" class="form-label text-primary text-xl">Tên tour du lịch</label>
                    <input type="text" class="form-control" id="tour_name" name="tour_name">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label text-primary text-xl">Hình ảnh tour</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="start_day" class="form-label text-primary text-xl">Ngày bắt đầu</label>
                    <input type="text" class="form-control" id="start_day" name="start_day">
                </div>

                <div class="mb-3">
                    <label for="end_day" class="form-label text-primary text-xl">Thời gian</label>
                    <input type="text" class="form-control" id="end_day" name="end_day">
                </div>

                <div class="mb-3">
                    <label for="star_from" class="form-label text-primary text-xl">Nơi khởi hành</label>
                    <select class="form-select" id="star_from" name="star_from">
                        <option value="1">Thành phố Hồ Chí Minh</option>
                        <option value="2">Hà Nội</option>
                        <option value="3">Đà Nẵng</option>
                        <!-- Thêm các option khác tương ứng với các Guide ID -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label text-primary text-xl">Giá tour (vnđ)</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>

                <div class="mb-3">
                    <label for="vehicle" class="form-label text-primary text-xl">Phương tiện di chuyển</label>
                    <select class="form-select" id="vehicle" name="vehicle">
                        <option value="1">Máy bay</option>
                        <option value="2">Xe khách</option>
                        <option value="3">Xe lửa</option>
                        <!-- Thêm các option khác tương ứng với các Guide ID -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label text-primary text-xl">Giới thiệu tour</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>

                <div class="mb-3">
                    <label for="schedule" class="form-label text-primary text-xl">Lịch trình tour</label>
                    <input type="text" class="form-control" id="schedule" name="schedule">
                </div>

                <div class="mb-3">
                    <label for="location_id" class="form-label text-primary text-xl">Location ID</label>
                    <select class="form-select" id="location_id" name="location_id">
                        <option value="1">Miền Bắc</option>
                        <option value="2">Miền Trung</option>
                        <option value="3">Miền Nam</option>
                        <!-- Thêm các option khác tương ứng với các Location ID -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="guide_id" class="form-label text-primary text-xl">Guide ID</label>
                    <select class="form-select" id="guide_id" name="guide_id">
                        <option value="1">Guide 1</option>
                        <option value="2">Guide 2</option>
                        <option value="3">Guide 3</option>
                        <!-- Thêm các option khác tương ứng với các Guide ID -->
                    </select>
                </div>

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