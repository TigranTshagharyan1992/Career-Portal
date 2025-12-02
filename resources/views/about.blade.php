@extends('layouts.app')

@section('title', 'About')
@push('page-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endpush
@section('content')


    <section id="slider" style="margin:auto; text-align:center;">
        <div id="home-carousel" class="swiper mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="{{ asset('images/Logo/shutterstock_1244257252.jpg') }}"/>

                    <div class="slide-caption">
                        <h2 class="headtext">We have answers</h2>
                        <p class="headtext">
                            If you have questions on how coronavirus will impact your business, get
                            in touch. At Grant Thornton we have committed to support our business community
                            in the face of this uncertainty. Please proceed with the short form and a member of our
                            team will be in touch.
                        </p>
                    </div>
                </div>

                <div class="swiper-slide">
                    <img src="{{ asset('images/Logo/offset_942382.jpg') }}"/>

                    <div class="slide-caption">
                        <h2 class="headtext">CAREER</h2>
                        <p class="headtext">
                            The first thing about us that will strike you will surely be the freedom
                            to grow. With us, you will be in charge of your career to take you places. Here you will
                            find an arena for your creativity and bold solutions for tasks assigned and objectives
                            set.
                        </p>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>

        </div>
        <!-- About Section -->
        <div class="container py-5">
            <div class="col-md-8 offset-md-2">
                <div class="heading text-center">
                    <p style="font-weight:bold; font-family:'GT Walsheim Pro', sans-serif; font-size:35px;">
                        We are Grant Thornton.
                    </p>
                    <p style="font-weight:bold; font-family:'GT Walsheim Pro', sans-serif; font-size:30px;">
                        Going beyond business as usual, so you can too.
                    </p>
                    <p style="font-size:18px; font-weight:bold; font-family:'GT Walsheim Pro', sans-serif;">
                        We invest in listening, building relationships and understanding your concerns to deliver an experience
                        that’s more personal, agile and proactive. We work at the pace that matters. Yours.
                        That's why we celebrate fresh thinking and diverse perspectives to find better solutions.
                        We don’t predict the future. We help you shape it.
                    </p>
                </div>
            </div>
        </div>

        <hr style="height:4px;border-width:0;color:#4f2d7f;background-color:#4f2d7f">

        <div class="container py-5">
            <div class="col-md-8 offset-md-2">
                <div class="heading text-center">
                    <p style="font-weight:bold; font-family:'GT Walsheim Pro', sans-serif; font-size:35px;">
                        We embrace what makes each market unique.
                    </p>
                    <p style="font-weight:bold; font-family:'GT Walsheim Pro', sans-serif; font-size:30px;">
                        On a global scale.
                    </p>
                    <p style="font-size:18px; font-weight:bold; font-family:'GT Walsheim Pro', sans-serif;">
                        We are a global network of 68,000 people in member firms in 147 markets with a common goal —
                        to help you realise your ambitions. Which is why our network combines global scale and capability
                        with local insights and understanding. So, whether you’re growing in one market or many,
                        looking to operate more effectively, managing risk and regulation, or realising stakeholder value,
                        our member firms have the assurance, tax and advisory capabilities you need with the quality you expect.
                    </p>
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
                delay: 5000,  // 10 seconds
                disableOnInteraction: false, // keeps autoplay even after manual navigation
            },
            loop: true, // enable infinite loop
        });
    </script>
@endpush

