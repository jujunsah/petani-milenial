@extends('layouts.app')

@section('content')

<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/sawah.jpg') }}" class="d-block w-100" alt="Sawah" style="height: 400px; object-fit: cover; filter: brightness(60%);">
      <div class="carousel-caption d-none d-md-block">
        <h2>{{ $hero_title }}</h2>
        <p>Membawa inovasi teknologi ke ladang pertanian Indonesia.</p>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="text-success">{{ $judul_halaman }}</h1>
        <p class="lead">{{ $deskripsi }}</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <h3>Program Unggulan Kami:</h3>
            <ul class="list-group">
                @foreach($program_unggulan as $program)
                    <li class="list-group-item list-group-item-action">🌾 {{ $program }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection