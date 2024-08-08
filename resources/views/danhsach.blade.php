<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sach</title>
</head>
<body>
    <div class="container">
        <h1>Danh Sách Tin</h1>
        @foreach($data as $t)
            <div class="row">
                <div class="left">
                    <h4>{{ $t->tieude }}</h4>
                    <p>{{ $t->noidung }}</p>
                </div>
            </div>
            <div class="right"><a href="/huuchien/capnhat/{{$t->id}}">Cập Nhật</a>, <a href="/huuchien/xoa/{{$t->id}}">Xóa</a></div>
            <hr>
        @endforeach
    </div>
</body>
</html>