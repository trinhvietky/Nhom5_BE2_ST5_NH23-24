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
            <h2>Thêm thông tin Tour List</h2>
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="tour_id" class="form-label">Tour ID</label>
                    <input type="text" class="form-control" id="tour_id" name="tour_id">
                </div>
                <div class="mb-3">
                    <label for="tour_name" class="form-label">Tour name</label>
                    <input type="text" class="form-control" id="tour_name" name="tour_name">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mb-3">
                    <label for="start_day" class="form-label">Start day</label>
                    <input type="text" class="form-control" id="start_day" name="start_day">
                </div>
                <div class="mb-3">
                    <label for="end_day" class="form-label">End day</label>
                    <input type="text" class="form-control" id="end_day" name="end_day">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="vehicle" class="form-label">Vehicle</label>
                    <input type="text" class="form-control" id="vehicle" name="vehicle">
                </div>
                <div class="mb-3">
                    <label for="location_id" class="form-label">Location ID</label>
                    <select class="form-select" id="location_id" name="location_id">
                        <option value="1">Location 1</option>
                        <option value="2">Location 2</option>
                        <option value="3">Location 3</option>
                        <!-- Thêm các option khác tương ứng với các Location ID -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="guide_id" class="form-label">Guide ID</label>
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
                            <th class="text-center" scope="col">End Day</th>
                            <th class="text-center" scope="col">Price</th>
                            <th class="text-center" scope="col">Vehicle</th>
                            <th class="text-center" scope="col">Location ID</th>
                            <th class="text-center" scope="col">Guide ID</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data->take(6) as $row)
                        <tr>
                            <td class="text-center">{{ $row->tour_id}}</td>
                            <td>{{ $row->tour_name}}</td>
                            <td class="text-center"><img class="img-fluid" style="width: 300px; height: 150px" src="{{ asset('img/'.$row->tour_image) }}" alt=""></td>
                            <td class="text-center">{{ $row->start_day}}</td>
                            <td class="text-center">{{ $row->end_day}}</td>
                            <td class="text-center">{{ $row->price}}</td>
                            <td class="text-center">{{ $row->vehicle}}</td>
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