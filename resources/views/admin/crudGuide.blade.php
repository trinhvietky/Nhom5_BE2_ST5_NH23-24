@extends('admin.app2')
@section('content2')

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Thông tin về Guide list của Admin</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Thêm, xóa, sửa thông tin Guide list</p>
                
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('guide.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="guide_name" class="form-label">Tên hướng dẫn viên</label>
                            <input type="text" class="form-control" id="guide_name" name="guide_name">
                        </div>
                        <div class="mb-3">
                        <label for="guide_pno" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="guide_pno" name="guide_pno">
                            </div>
                        <div class="mb-3">
                            <label for="guide_image" class="form-label text-primary text-xl">Hình ảnh</label>
                            <input type="file" class="form-control" id="guide_image" name="guide_image">
                        </div>
                        <div class="mb-3">
                            <label for="guide_mail" class="form-label">Email</label>
                            <input type="text" class="form-control" id="guide_mail" name="guide_mail">
                        </div>
                        <div class="mb-3">
                            <label for="guide_intro" class="form-label">Giới thiệu</label>
                            <textarea class="form-control" id="guide_intro" name="guide_intro"></textarea>
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
                            <th class="text-center" scope="col">Guide name</th>
                            <th class="text-center" scope="col">Alo</th>
                            <th class="text-center" scope="col">Image</th>
                            <th class="text-center" scope="col">Mail</th>
                            <th class="text-center" scope="col">Description </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($data_guide as $row)
                        <tr>
                            <td class="text-center">{{ $row->guide_Id}}</td>
                            <td class="text-center">{{ $row->guide_Name}}</td>
                            <td class="text-center">{{ $row->guide_Pno}}</td>
                            <td class="text-center"><img class="img-fluid" src="{{ asset('img/'.$row->guide_Img) }}" alt=""></td>
                            <td class="text-center">{{ $row->guide_Mail}}</td>
                            <td class="text-center">{{ $row->guide_Intro}}</td>
                            <!-- Nút xóa -->
                            <td class="text-center">
                                <form action="{{ route('guide.destroy', $row->guide_Id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('guide.edit', $row->guide_Id) }}" class="btn btn-sm btn-primary">edit</a>
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