@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div>
        <!-- Masthead -->
        <header class="masthead text-center text-white" style="margin-top:6%; background-image: url({{$home->main_image}});!important;">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0" style="color:#fff;font-weight: lighter; margin: auto; width: 70%">{{$home->main_title}}</h1>
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
                            <img class="img-fluid" src="{{ asset($home->section1_image) }}" alt="..." style="box-shadow: 0 0 8px 8px white inset;" />
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <a href="/academy" style="text-decoration:none; color:black;">
                                <h2 class="display-4" style="line-height:90%;">{{$home->section1_title}}</h2>
                            </a>
                            <p>{{$home->section1_text}}</p>
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
                        <div class="p-5"><img class="img-fluid" src="{{ asset($home->section2_image) }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4" style="line-height:90%;">{{$home->section2_title}}</h2>
                            <p>{{$home->section2_text}}</p>
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
                        <div class="p-5"><img class="img-fluid" src="{{ asset($home->section3_image) }}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4" style="line-height:90%;">{{$home->section3_title}}</h2>
                            <p>{{$home->section3_text}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-lg shadow">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="successModalLabel">Success!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:white;">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="successMessage">Your message has been sent successfully.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('page-js')
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Set message from session
                document.getElementById('successMessage').innerText = "{{ session('success') }}";

                // Show the modal
                const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            });
        </script>
    @endif
@endpush
