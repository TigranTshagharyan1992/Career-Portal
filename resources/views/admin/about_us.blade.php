@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

@section('content')
    <div id="home">
        <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Slider 1 Title: Matches validation key 'slider1_title' --}}
            <div class="form-group">
                <label for="slider1_title">Slider 1 Title</label>
                <input type="text" name="slider1_title" id="slider1_title" class="form-control"
                       value="{{ old('slider1_title', $about->slider1_title ?? '') }}">
                @if($errors->has('slider1_title'))
                    <div class="text-danger">{{ $errors->first('slider1_title') }}</div>
                @endif
            </div>

            {{-- Slider 1 Description: Matches validation key 'slider1_description' --}}
            <div class="form-group">
                <label for="slider1_description">Slider 1 Description</label>
                <textarea name="slider1_description" id="slider1_description" class="form-control" rows="4">{{ old('slider1_description', $about->slider1_description ?? '') }}</textarea>
                @if($errors->has('slider1_description'))
                    <div class="text-danger">{{ $errors->first('slider1_description') }}</div>
                @endif
            </div>

            {{-- Slider 2 Title: Matches validation key 'slider2_title' --}}
            <div class="form-group">
                <label for="slider2_title">Slider 2 Title</label>
                <input type="text" name="slider2_title" id="slider2_title" class="form-control"
                       value="{{ old('slider2_title', $about->slider2_title ?? '') }}">
                @if($errors->has('slider2_title'))
                    <div class="text-danger">{{ $errors->first('slider2_title') }}</div>
                @endif
            </div>

            {{-- Slider 2 Description: Matches validation key 'slider2_description' --}}
            <div class="form-group">
                <label for="slider2_description">Slider 2 Description</label>
                <textarea name="slider2_description" id="slider2_description" class="form-control" rows="4">{{ old('slider2_description', $about->slider2_description ?? '') }}</textarea>
                @if($errors->has('slider2_description'))
                    <div class="text-danger">{{ $errors->first('slider2_description') }}</div>
                @endif
            </div>

            {{-- Text 1: Matches validation key 'text1' --}}
            <div class="form-group">
                <label for="text1">Text 1</label>
                <textarea name="text1" id="text1" class="form-control rich-editor"
                          rows="4">{{ old('text1', $about->text1 ?? '') }}</textarea>
                @if($errors->has('text1'))
                    <div class="text-danger">{{ $errors->first('text1') }}</div>
                @endif
            </div>

            {{-- Text 2: Matches validation key 'text2' --}}
            <div class="form-group">
                <label for="text2">Text 2</label>
                <textarea name="text2" id="text2" class="form-control rich-editor"
                          rows="4">{{ old('text2', $about->text2 ?? '') }}</textarea>
                @if($errors->has('text2'))
                    <div class="text-danger">{{ $errors->first('text2') }}</div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('js/admin-academy-form.js') }}"></script>
@endsection
