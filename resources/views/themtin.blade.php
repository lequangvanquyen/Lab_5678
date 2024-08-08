<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Tin</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div class="container" style="width: 500px">
        <h1 class="text-center">Thêm Mới</h1>
        <form action="/huuchien/them" method="POST"> 
            @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tiêu Đề</label>
            <input type="text" class="form-control" name='tieude' aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tóm Tắt</label>
            <input type="text" class="form-control" name='tomtat' aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nội Dung</label>
            <input type="text" class="form-control" name='noidung' aria-describedby="emailHelp">
        </div>

        <select class="form-select" aria-label="Default select example" name='idLT'>
            <option selected>Chọn Danh Mục</option>
            <option value="1">Xã Hội</option>
            <option value="2">Chính Trị</option>
            <option value="3">Thể Thao</option>
        </select>
        
        <button type="submit" class="btn btn-primary mt-5">Thêm Tin</button>
        </form>
    </div>
</body>
</html>