@extends('layouts/Tintuc')

@section('noidung')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Đăng Ký</h2>

                <form method="POST" action="#" enctype="multipart/form-data">
                    @csrf
                    @include('form-user')
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary me-5">Đăng Nhập</button>
                        <button type="submit" class="btn btn-secondary">Hủy</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection