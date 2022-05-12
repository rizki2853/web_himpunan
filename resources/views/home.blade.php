@extends('layout/main_layout')
@section('body') 
    <section class="hero-section container">
        <div class="hero-background">
        <video autoplay="" loop="" class="hero__background-video hero__background-video--light">
            <source src="assets/video-bg-light.mp4" type="video/mp4">
        </video>
        </div>
        <div class="hero-left">
        <h1>Himpunan<br>Mahasiswa<br>Informatika</h1>
        <div class="tagline">
            <span>‘‘</span>
            <p>Informatika Beda! Informatika Satu! <br>
            <span>Informatika Beda tapi Satu!</span>
            </p>
        </div>
        </div>
        <div class="hero-right">
        <img src="assets/logo_hmif.svg" alt="">
        <img src="assets/logo_ifunram.png" alt="">
        <img src="assets/logo_unram.png" alt="">
        </div>
    </section>
    <div class="leader-background"></div>
    <section class="leader-section container">
        <div class="leader-left">
        <h1>Our <br>Leaders</h1>
        <p>Let’s look at <span>the history</span>.</p>
        </div>
        <div class="gallery-wrapper">
            <button class="before-gallery btn-reset" id="btn-before-gallery">
              <img src="assets/ic_arrow.svg" alt="">
            </button>
            <div class="gallery" >
                @for ($i = 0; $i < $leaders->count(); $i++)
                <div class="gallery-item gallery-card gallery-item-{{ $i+1 }}">
                    <div class="periode">{{ $leaders[$i]->masa_jabatan }}</div>
                    <div class="image gallery-image-4" style="background-image: url('assets/{{ $leaders[$i]->foto }}');"></div>
                    <div class="info">
                      <p class="name">{{ $leaders[$i]->name }}</p>
                      <a class="instagram" href="{{ $leaders[$i]->ig }}" target="_blank"><img src="assets/ic_insta.svg" alt="">{{ $leaders[$i]->name }}</a>
                    </div>
                  </div>
                @endfor
            </div>
            <button class="next-gallery btn-reset" id="btn-next-gallery">
              <img src="assets/ic_arrow.svg" alt="">
            </button>
        </div>
    </section>
@endsection