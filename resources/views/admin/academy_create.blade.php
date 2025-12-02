@extends('admin.dashboard')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-academy-v2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-academy-form.css') }}">
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('js/admin-academy-form.js') }}"></script>
@endsection
@section('content-related')
    <div class="content academy-v2-container">
        <h1>Add Academy</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @include('admin.components.academy_form', [
            'action' => route('admin.academy.store'),
            'method' => 'POST',
            'course' => null
        ])
    </div>
@endsection

