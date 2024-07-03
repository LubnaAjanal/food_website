@extends('pageLayout')

@section('content')
    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row gy-4 justify-content-center justify-content-lg-between">
                    <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h1>
                        <p data-aos="fade-up" data-aos-delay="100">There is no sincerer love <br>than the love of food</p>
                        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                            <a href="#book-a-table" class="btn-get-started">Booka an Order</a>
                            {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section><!-- /Hero Section -->

        {{-- About Section File --}}
        @include('about')

        {{-- Menu Section File --}}
        @include('menu')

        {{-- order Section File --}}
        @include('order')

        {{-- gallery Section File --}}
        @include('gallery')

        {{-- contact Section File --}}
        @include('contact')

    @endsection
