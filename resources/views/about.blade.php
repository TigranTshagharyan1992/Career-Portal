@extends('layouts.app')

@section('title', 'About')
@push('page-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush
@section('content')

    <section id="slider" style="margin:auto; text-align:center;">
        <div id="home-carousel" class="swiper mySwiper">

            <div class="swiper-wrapper">

                {{-- 🎯 Slider 1: Using data from $about->slider1_title and $about->slider1_description --}}
                <div class="swiper-slide">
                    <img src="{{ asset('images/Logo/shutterstock_1244257252.jpg') }}"/>

                    <div class="slide-caption">
                        <h2 class="headtext">{{ $about->slider1_title ?? 'Default Slider 1 Title' }}</h2>
                        <p class="headtext">
                            {{ $about->slider1_description ?? 'Default Slider 1 Description' }}
                        </p>
                    </div>
                </div>

                {{-- 🎯 Slider 2: Using data from $about->slider2_title and $about->slider2_description --}}
                <div class="swiper-slide">
                    <img src="{{ asset('images/Logo/offset_942382.jpg') }}"/>

                    <div class="slide-caption">
                        <h2 class="headtext">{{ $about->slider2_title ?? 'Default Slider 2 Title' }}</h2>
                        <p class="headtext">
                            {{ $about->slider2_description ?? 'Default Slider 2 Description' }}
                        </p>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>

        </div>

        <div class="container py-5">
            <div class="col-md-8 offset-md-2">
                <div class="heading text-center">
                    {{-- 🎯 Text 1 Content: Using $about->text1 and rendering HTML if it's a rich text field --}}
                    {!! $about->text1 !!}
                </div>
            </div>
        </div>

        <hr style="height:4px;border-width:0;color:#4f2d7f;background-color:#4f2d7f">

        <div class="container py-5">
            <div class="col-md-8 offset-md-2">
                <div class="heading text-center">
                    {{-- 🎯 Text 2 Content: Using $about->text2 and rendering HTML if it's a rich text field --}}
                    <div style="font-size:18px; font-weight:bold; font-family:'GT Walsheim Pro', sans-serif;">
                        {!! $about->text2 !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer-bottom d-flex justify-content-between">
        <div>
            <p>Copyright &copy;2024 <a href="https://www.grantthornton.global/" target="_blank" style="color:#3d0e61;">
                    Grant Thornton CJSC</a></p>
        </div>
        <div>
            <p><a href="https://www.grantthornton.am/disclaimer1/" target="_blank" style="color:#3d0e61;">Disclaimer&nbsp;</a></p>
            <p><a href="/" style="color:#3d0e61;">&bull; Home&nbsp;</a></p>
            <p><a href="/feedback" style="color:#3d0e61;">&bull; Contact Us</a></p>
        </div>
    </div>
@endsection

@push('page-js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            effect: "fade",
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 5000,  // 5 seconds
                disableOnInteraction: false, // keeps autoplay even after manual navigation
            },
            loop: true, // enable infinite loop
        });
    </script>
@endpush
