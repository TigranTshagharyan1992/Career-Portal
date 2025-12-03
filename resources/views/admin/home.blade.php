@extends('admin.layout')

@section('content')
    <div id="home">
        <form action="{{route('admin.home.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
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
                @if($errors->has('main_image'))
                    <div class="text-danger">{{ $errors->first('main_image') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section1_title">Section 1 Title</label>
                <input type="text" name="section1_title" id="section1_title" class="form-control"
                       value="{{ old('section1_title', $homePage->section1_title ?? '') }}">
                @if($errors->has('section1_title'))
                    <div class="text-danger">{{ $errors->first('section1_title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section1-text">Section 2 text</label>
                <textarea name="section1_text" id="section1_text" class="form-control"
                          rows="4">{{ old('section1_text', $homePage->section1_text ?? '') }}</textarea>
                @if($errors->has('section1_text'))
                    <div class="text-danger">{{ $errors->first('section1_text') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section1_image">Section 1 Image</label>
                <input type="file" name="section1_image" id="section1_image" class="form-control-file">
                @if($errors->has('section1_image'))
                    <div class="text-danger">{{ $errors->first('section1_image') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="section1_title">Section 1 Title</label>
                <input type="text" name="section1_title" id="section1_title" class="form-control"
                       value="{{ old('section1_title', $homePage->section1_title ?? '') }}">
                @if($errors->has('section1_title'))
                    <div class="text-danger">{{ $errors->first('section1_title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section1-text">Section 2 text</label>
                <textarea name="section1_text" id="section1_text" class="form-control"
                          rows="4">{{ old('section1_text', $homePage->section1_text ?? '') }}</textarea>
                @if($errors->has('section1_text'))
                    <div class="text-danger">{{ $errors->first('section1_text') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section1_image">Section 1 Image</label>
                <input type="file" name="section1_image" id="section1_image" class="form-control-file">
                @if($errors->has('section1_image'))
                    <div class="text-danger">{{ $errors->first('section1_image') }}</div>
                @endif
            </div>

            <div class="form-group">
                <label for="section1_title">Section 1 Title</label>
                <input type="text" name="section1_title" id="section1_title" class="form-control"
                       value="{{ old('section1_title', $homePage->section1_title ?? '') }}">
                @if($errors->has('section1_title'))
                    <div class="text-danger">{{ $errors->first('section1_title') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section1-text">Section 2 text</label>
                <textarea name="section1_text" id="section1_text" class="form-control"
                          rows="4">{{ old('section1_text', $homePage->section1_text ?? '') }}</textarea>
                @if($errors->has('section1_text'))
                    <div class="text-danger">{{ $errors->first('section1_text') }}</div>
                @endif
            </div>
            <div class="form-group">
                <label for="section1_image">Section 1 Image</label>
                <input type="file" name="section1_image" id="section1_image" class="form-control-file">
                @if($errors->has('section1_image'))
                    <div class="text-danger">{{ $errors->first('section1_image') }}</div>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update Home Page Images</button>
        </form>

    </div>
@endsection
