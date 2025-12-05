@extends('admin.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

@section('content')
    <div id="home">
        <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Main Title & Image --}}
            <div class="form-group">
                <label for="main_title">Slider1_title</label>
                <input type="text" name="slider1_title" id="main_title" class="form-control"
                       value="{{ old('slider1_title', $homePage->slider1_title ?? '') }}">
                @if($errors->has('slider1_title'))
                    <div class="text-danger">{{ $errors->first('slider1_title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="slider1_description">slider2_description</label>
                <textarea name="slider1_description" id="slider1_description" class="form-control" rows="4">{{ old('slider1_description', $homePage->section3_text ?? '') }}</textarea>
                @if($errors->has('slider1_description'))
                    <div class="text-danger">{{ $errors->first('slider1_description') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="main_title">Slider2_title</label>
                <input type="text" name="Slider2_title" id="main_title" class="form-control"
                       value="{{ old('Slider2_title', $homePage->Slider2_title ?? '') }}">
                @if($errors->has('Slider2_title'))
                    <div class="text-danger">{{ $errors->first('Slider2_title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="slider2_description">slider2_description</label>
                <textarea name="section2_text" id="slider2_description" class="form-control" rows="4">{{ old('slider2_description', $homePage->section3_text ?? '') }}</textarea>
                @if($errors->has('slider2_description'))
                    <div class="text-danger">{{ $errors->first('slider2_description') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="main_title">Text 1</label>
                <textarea name="text1" id="text1" class="form-control rich-editor"
                          rows="4">{{ old('text1', $homePage->text1 ?? '') }}</textarea>
            @if($errors->has('text1'))
                    <div class="text-danger">{{ $errors->first('text1') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="main_title">Text 2</label>
                <textarea name="text2" id="text2" class="form-control rich-editor"
                          rows="4">{{ old('text2', $homePage->text2 ?? '') }}</textarea>
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
