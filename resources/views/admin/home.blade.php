@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
    <style>
        .image-preview {
            max-width: 200px;
            margin-top: 10px;
            display: block;
        }
    </style>
@endsection

@section('content')
    <div id="home">
        <form action="{{ route('admin.home.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Main Title & Image --}}
            <div class="form-group">
                <label for="main_title">Main Title</label>
                <input type="text" name="main_title" id="main_title" class="form-control"
                       value="{{ old('main_title', $homePage->main_title ?? '') }}">
                @if($errors->has('main_title'))
                    <div class="text-danger">{{ $errors->first('main_title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="main_image">Main Image</label>
                <input type="file" name="main_image" id="main_image" class="form-control-file">
                @if($homePage->main_image)
                    <img src="{{ asset($homePage->main_image) }}" alt="Main Image" class="image-preview">
                @endif
                @if($errors->has('main_image'))
                    <div class="text-danger">{{ $errors->first('main_image') }}</div>
                @endif
            </div>

            {{-- Section 1 --}}
            <h4>Section 1</h4>
            <div class="form-group">
                <label for="section1_title">Title 1</label>
                <input type="text" name="section1_title" id="section1_title" class="form-control"
                       value="{{ old('section1_title', $homePage->section1_title ?? '') }}">
                @if($errors->has('section1_title'))
                    <div class="text-danger">{{ $errors->first('section1_title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section1_text">Text</label>
                <textarea name="section1_text" id="section1_text" class="form-control" rows="4">{{ old('section1_text', $homePage->section1_text ?? '') }}</textarea>
                @if($errors->has('section1_text'))
                    <div class="text-danger">{{ $errors->first('section1_text') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section1_image">Image 1</label>
                <input type="file" name="section1_image" id="section1_image" class="form-control-file">
                @if($homePage->section1_image)
                    <img src="{{ asset($homePage->section1_image) }}" alt="Section 1 Image" class="image-preview">
                @endif
                @if($errors->has('section1_image'))
                    <div class="text-danger">{{ $errors->first('section1_image') }}</div>
                @endif
            </div>

            {{-- Section 2 --}}
            <h4>Section 2</h4>
            <div class="form-group">
                <label for="section2_title">Title 2</label>
                <input type="text" name="section2_title" id="section2_title" class="form-control"
                       value="{{ old('section2_title', $homePage->section2_title ?? '') }}">
                @if($errors->has('section2_title'))
                    <div class="text-danger">{{ $errors->first('section2_title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section2_text">Text 2</label>
                <textarea name="section2_text" id="section2_text" class="form-control" rows="4">{{ old('section2_text', $homePage->section2_text ?? '') }}</textarea>
                @if($errors->has('section2_text'))
                    <div class="text-danger">{{ $errors->first('section2_text') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section2_image">Image 2</label>
                <input type="file" name="section2_image" id="section2_image" class="form-control-file">
                @if($homePage->section2_image)
                    <img src="{{ asset($homePage->section2_image) }}" alt="Section 2 Image" class="image-preview">
                @endif
                @if($errors->has('section2_image'))
                    <div class="text-danger">{{ $errors->first('section2_image') }}</div>
                @endif
            </div>

            {{-- Section 3 --}}
            <h4>Section 3</h4>
            <div class="form-group">
                <label for="section3_title">Title 3</label>
                <input type="text" name="section3_title" id="section3_title" class="form-control"
                       value="{{ old('section3_title', $homePage->section3_title ?? '') }}">
                @if($errors->has('section3_title'))
                    <div class="text-danger">{{ $errors->first('section3_title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section3_text">Text 3</label>
                <textarea name="section3_text" id="section3_text" class="form-control" rows="4">{{ old('section3_text', $homePage->section3_text ?? '') }}</textarea>
                @if($errors->has('section3_text'))
                    <div class="text-danger">{{ $errors->first('section3_text') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section3_image">Image 3</label>
                <input type="file" name="section3_image" id="section3_image" class="form-control-file">
                @if($homePage->section3_image)
                    <img src="{{ asset($homePage->section3_image) }}" alt="Section 3 Image" class="image-preview">
                @endif
                @if($errors->has('section3_image'))
                    <div class="text-danger">{{ $errors->first('section3_image') }}</div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
