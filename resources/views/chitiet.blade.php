@extends('layouts/Tintuc')

@section('noidung')
    <!-- main -->
    <div class="container mt-5" style="height:500px">
        <h1 class="text-center">Tin tức </h1>

        @foreach ($chitiet as $t)
        <h1>{{ $t->tieude }}</h1>
        <h3>{{ $t->tomtat }}</h3>
        <p>{{ $t->noidung }}</p>
        @endforeach
    </div>
@endsection