@extends('layouts/Tintuc')

@section('noidung')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Đăng Ký</h2>

                <form method="POST" action="#" enctype="multipart/form-data">
                    @csrf
                    @include('form-user')
                    <div class="mb-3">
                        <label for="confirm-password" class="form-label">Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" id="confirm-password" name="password_confirmation"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Ngày sinh</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Giới tính</label>
                        <select class="form-select" id="gender" name="gender">
                            <option value="male">Nam</option>
                            <option value="female">Nữ</option>
                            <option value="other">Khác</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="hobbies" class="form-label">Sở thích</label>
                        <div class="row gx-5">
                            <div class="col">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Xem Phim
                                </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Thể Thao
                                </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Nghe Nhạc
                                </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Đọc sách
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="mb-3">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary me-5">Đăng Ký</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection