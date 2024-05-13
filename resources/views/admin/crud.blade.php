@extends('admin.app2')
@section('content2')

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Thông tin tour list của Admin</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Thêm, xóa, sửa thông tin tour list</p>
                
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('tours.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tour_name" class="form-label">Tên tour</label>
                            <input type="text" class="form-control" id="tour_name" name="tour_name" placeholder="Tên tour">
                        </div>
                        <div class="mb-3">
                            <label for="start_day" class="form-label">Ngày bắt đầu</label>
                            <input type="date" class="form-control" id="start_day" name="start_day" placeholder="Ngày bắt đầu">
                        </div>
                        <div class="mb-3">
                            <label for="star_from" class="form-label">Nơi khởi hành</label>
                            <input type="text" class="form-control" id="star_from" name="star_from" placeholder="Nơi khởi hành">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Giá tour</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Giá tour">
                        </div>
                        <div class="mb-3">
                            <label for="tour_image" class="form-label text-primary text-xl">Hình ảnh tour</label>
                            <input type="file" class="form-control" id="tour_image" name="tour_image">
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Thời gian</label>
                            <input type="text" class="form-control" id="time" name="time" placeholder="Thời gian">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="vehicle" class="form-label">Phương tiện di chuyển</label>
                            <input type="text" class="form-control" id="vehicle" name="vehicle" placeholder="Phương tiện di chuyển">
                        </div>
                        <div class="mb-3">
                            <label for="tour_description" class="form-label">Giới thiệu tour</label>
                            <textarea class="form-control" id="tour_description" name="tour_description" placeholder="Giới thiệu tour"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tour_schedule" class="form-label">Lịch trình tour</label>
                            <textarea class="form-control" id="tour_schedule" name="tour_schedule" placeholder="Lịch trình tour"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tour_sale" class="form-label">Giảm giá tour</label>
                            <input type="text" class="form-control" id="tour_sale" name="tour_sale" placeholder="Giảm giá tour">
                        </div>
                        <div class="mb-3">
                            <!-- <label for="location_id" class="form-label">Location ID</label>
                            <input type="number" class="form-control" id="location_id" name="location_id" placeholder="Location ID"> -->
                            <select name="" id="" style="width: 312px;">
                                @foreach ($data as $row)
                                <option value="{{$row->location_id}}">{{$row->location_id}}</option>                                
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="guide_id" class="form-label">Guide ID</label>
                            <input type="number" class="form-control" id="guide_id" name="guide_id" placeholder="Guide ID">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
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
                            <th class="text-center" scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data as $row)
                        <tr>
                            <td class="text-center">{{ $row->tour_id}}</td>
                            <td>{{ $row->tour_name}}</td>
                            <td class="text-center"><img class="img-fluid" src="{{ asset('img/'.$row->tour_image) }}" alt=""></td>
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
                            <!-- Nút xóa -->
                            <td class="text-center">
                                <form action="{{ route('tours.destroy', $row->tour_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('tours.edit', $row->tour_id) }}" class="btn btn-sm btn-primary">edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection