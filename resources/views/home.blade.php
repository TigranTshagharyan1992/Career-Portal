@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div>
        <!-- Masthead -->
        <header class="masthead text-center text-white" style="margin-top:6%;">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0" style="color:#fff;font-weight: lighter;">Welcome to more.</h1>
                    <h1 class="masthead-heading mb-0" style="color:#fff;">Welcome to Grant Thornton.</h1>
                    <br><br>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5 btnew" href="#scroll">Learn More</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>

        <!-- Section 1 -->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5">
                            <img class="img-fluid" src="{{ asset('images/students-new.jpg') }}" alt="..." style="box-shadow: 0 0 8px 8px white inset;" />
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <a href="/academy" style="text-decoration:none; color:black;">
                                <h2 class="display-4" style="line-height:90%;">Discover your potential</h2>
                            </a>
                            <p>Grant Thornton signifies the potential of youth and is committed to encourage youth and their professional development...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2 -->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid" src="{{ asset('images/gettyimages-499261926_9360_0previewlarge.jpg') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4" style="line-height:90%;">What Grant Thornton has to offer?</h2>
                            <p>Grant Thornton offers something you can't find anywhere else...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center" style="padding-bottom:20%">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid" src="{{ asset('images/job-opportunities.jpg') }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4" style="line-height:90%;">Job opportunities</h2>
                            <p>Grant Thornton offers something you can't find anywhere else...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
