@extends('layouts.app')

@section('title', 'Academy')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Left Banner -->
            <div class="col-sm-5 left-wrapper">
                <div class="event-banner-wrapper">
                    <nav class="logo">
                        <a href="/" class="navbar-brand" style="position:absolute">
                            <img src="{{ asset('images/GTlogo.png') }}" alt="" width="260" height="60"
                                 style="padding: 5px 0;margin-top:-10%;margin-left:-8%;" class="navbar-brandy">
                        </a>
                    </nav>
                    <h2><b>Choose Your<br>Course</b></h2>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-sm-7 right-wrapper">
                <div class="event-ticket-wrapper">
                    <div class="event-tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Country
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <div id="myBtnContainer">
                                        <button class="btn active" onclick="filterSelection('all')" id="all">All</button>
                                        <button class="btn" onclick="filterSelection('Armenia')">Armenia</button>
                                        <button class="btn" onclick="filterSelection('Georgia')">Georgia</button>
                                        <button class="btn" onclick="filterSelection('Kyrgyzstan')">Kyrgyzstan</button>
                                        <button class="btn" onclick="filterSelection('Lebanon')">Lebanon</button>
                                        <button class="btn" onclick="filterSelection('Mongolia')">Mongolia</button>
                                    </div>
                                </ul>
                            </li>

                            <!-- Hamburger Menu -->
                            <input type="checkbox" id="hamburger-input" class="burger-shower"/>
                            <label id="hamburger-menu" for="hamburger-input">
                                <div id="sidebar-menu">
                                    <h3 style="font-family:'GT Walsheim Pro';color:black;font-size:25px;font-weight:bold;border-bottom:thin groove;">Menu</h3>
                                    <ul>
                                        <a href="/"><li class="minmen">Home</li></a>
                                        <a href="/job"><li class="minmen">Careers</li></a>
                                        <a href="/academy"><li class="minmen">Academy</li></a>
                                        <a href="/about"><li class="minmen">About Us</li></a>
                                        <a href="/feedback"><li class="minmen">Contact Us</li></a>
                                        <a href="https://www.grantthornton.global/" target="_blank"><li class="minmen">Official Website</li></a>
                                    </ul>
                                </div>
                            </label>
                            <div class="overlay"></div>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="buyTicket">
                                @if(isset($form))
                                    @foreach($form as $f)
                                        @if($f->is_active)
                                            <div class="filterDiv {{ $f->Country }}">
                                                <div class="col-md-6">
                                                    <div class="ticketBox">
                                                        <div class="row">
                                                            <div class="col-xs-6">
                                                                <div class="ticket-name" style="width:225%!important;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
                                                                    <a href="/course/{{ $f->Course_name }}">
                                                                        {{ Str::limit($f->Course_name, 30) }}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ticket-description">
                                                            <p><strong>Course Description</strong><br>{{ Str::limit(strip_tags($f->Course_description), 77) }}</p>
                                                        </div>
                                                        <div class="ticket-description">
                                                            <p><strong>Deadline</strong> <strong style="float:right;">Country</strong><br>{{ $f->Deadline }} <span style="float:right">{{ $f->Country }}</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Initialize filter -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("all").click();
        });
    </script>
@endsection

@push('page-css')
    <!-- Academy-specific CSS -->
    <link href="{{ asset('css/custom-study.css') }}" rel="stylesheet">
    <link href="{{ asset('css/academy.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <style>
        h1,h2,h3,h4,h5,h6 {
            font-family: 'GT Walsheim Pro', sans-serif !important;
        }
    </style>
@endpush

@push('page-js')
    <script src="{{ asset('js/academy.js') }}"></script>
    <script src="{{ asset('js/allscript.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            document.getElementById("all").click();
        });
    </script>
@endpush
