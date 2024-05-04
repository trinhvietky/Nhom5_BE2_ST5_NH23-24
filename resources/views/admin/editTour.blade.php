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
    <div class="row justify-content-center">
        <form action="{{ route('tours.update', $tour->tour_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-6" style="width: 500px;">

                <div class="mb-3">
                    <label for="tour_name" class="form-label">Tên tour</label>
                    <input type="text" class="form-control" id="tour_name" name="tour_name" value="{{ $tour->tour_name }}" placeholder="Tên tour">
                </div>
                <div class="mb-3">
                    <label for="tour_image" class="form-label text-primary text-xl">Hình ảnh tour</label>
                    <input type="file" class="form-control" id="tour_image" value="{{ $tour->tour_image }}" name="tour_image">
                </div>
                <div class="mb-3">
                    <label for="start_day" class="form-label">Ngày bắt đầu</label>
                    <input type="date" class="form-control" id="start_day" name="start_day" value="{{ $tour->start_day }}" placeholder="Ngày bắt đầu">
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label">Thời gian</label>
                    <input type="text" class="form-control" id="time" name="time"  value="{{ $tour->time }}" placeholder="Thời gian">
                </div>
                <div class="mb-3">
                    <label for="star_from" class="form-label">Nơi khởi hành</label>
                    <input type="text" class="form-control" id="star_from" name="star_from" value="{{ $tour->star_from }}" placeholder="Nơi khởi hành">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Giá tour</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $tour->price }}" placeholder="Giá tour">
                </div>
            </div>
            <div class="col-md-6" style="position: relative; top: -10px; width: 500px;">
                <div class="mb-3">
                    <label for="vehicle" class="form-label">Phương tiện di chuyển</label>
                    <input type="text" class="form-control" id="vehicle" name="vehicle" value="{{ $tour->vehicle }}" placeholder="Phương tiện di chuyển">
                </div>
                <div class="mb-3">
                    <label for="tour_description" class="form-label">Giới thiệu tour</label>
                    <textarea class="form-control" id="tour_description" name="tour_description" placeholder="Giới thiệu tour">{{ $tour->tour_description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="tour_schedule" class="form-label">Lịch trình tour</label>
                    <textarea class="form-control" id="tour_schedule" name="tour_schedule"placeholder="Lịch trình tour">{{ $tour->tour_schedule }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="tour_sale" class="form-label">Giảm giá tour</label>
                    <input type="text" class="form-control" id="tour_sale" name="tour_sale"  value="{{ $tour->tour_sale }}" placeholder="Giảm giá tour">
                </div>
                <div class="mb-3">
                    <label for="location_id" class="form-label">Location ID</label>
                    <input type="number" class="form-control" id="location_id" name="location_id" value="{{ $tour->location_id }}" placeholder="Location ID">
                </div>
                <div class="mb-3">
                    <label for="guide_id" class="form-label">Guide ID</label>
                    <input type="number" class="form-control" id="guide_id" name="guide_id" value="{{ $tour->guide_id }}" placeholder="Guide ID">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
        </form>

    </div>
</div>




@endsection