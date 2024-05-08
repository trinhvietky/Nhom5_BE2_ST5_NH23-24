@extends('admin.app2')
@section('content2')

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Chỉnh sửa thông tin của hướng dẫn viên</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">EDIT</p>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="row justify-content-center">
    <form action="{{ route('guide.update', $guide->guide_Id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-md-12" style="width: 500px;">
        <div class="mb-3">
            <label for="guide_Name" class="form-label">Tên hướng dẫn viên</label>
            <input type="text" class="form-control" id="guide_Name" name="guide_Name" value="{{ $guide->guide_Name }}">
        </div>
        <div class="mb-3">
            <label for="guide_Pno" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="guide_Pno" name="guide_Pno" value="{{ $guide->guide_Pno }}">
        </div>
        <div class="mb-3">
            <label for="guide_Img" class="form-label text-primary text-xl">Hình ảnh</label>
            <input type="file" class="form-control" id="guide_Img" value="{{ $guide->guide_Img }}" name="guide_Img">
        </div>
        <div class="mb-3">
            <label for="guide_Mail" class="form-label">Mail</label>
            <input type="text" class="form-control" id="guide_Mail" name="guide_Mail" value="{{ $guide->guide_Mail }}">
        </div>
        <div class="mb-3">
            <label for="guide_Intro" class="form-label">Giới thiệu</label>
            <textarea class="form-control" id="guide_Intro" name="guide_Intro">{{ $guide->guide_Intro }}</textarea>
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
    </div>
</form>

    </div>
</div>




@endsection