@extends('layouts/Tintuc')

@section('noidung')
    <!-- main -->
    <div class="container mt-5" style="height:500px">
        <h1 class="text-center">Tin trong loại {{ $idLT }}</h1>
        @foreach ($tintrongloai as $tin)
            <div>
                <a href="{{ url('/tin',[$tin->id]) }}">{{ $tin->tieude }}</a>
                <p>{{ $tin->tomtat }}</p>
            </div>
            <hr>
        @endforeach
    </div>
@endsection