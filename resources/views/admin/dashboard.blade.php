@extends('admin.layout')

@section('title', 'Career Portal Admin')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-academy-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-academy-form.css') }}">
@endsection

@section('content')
    <div class="main admin-dashboard-container" id="main">
        <div class="content">
            <!-- Content -->
            <div id="content" class="colMS grid-240-1fr">
                <div id="content-main">
                    <div class="app-academy module admin-module">
                        <table class="admin-table">
                            <tr class="model-courses">
                                <th scope="row"><a href="{{route('admin.academy')}}">Academy</a></th>
                            </tr>
                            <tr class="model-students">
                                <th scope="row"><a href="/admin/academy/students/">Academy Applicants</a></th>
                            </tr>
                            <tr class="model-courses">
                                <th scope="row"><a href="/admin/academy/courses/">Vacancies</a></th>
                            </tr>
                            <tr class="model-students">
                                <th scope="row"><a href="/admin/academy/students/">Vacancies Applicants</a></th>
                            </tr>
                            <tr class="model-students">
                                <th scope="row"><a href="{{route('admin.contact.us')}}">Contact Us</a></th>
                            </tr>

                            <!-- Repeat other models as needed -->
                        </table>
                    </div>
                </div>

                    <div id="content-related">
                        @yield('content-related')
                    </div>

                <br class="clear">
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('js/admin-academy-form.js') }}"></script>
@endsection
