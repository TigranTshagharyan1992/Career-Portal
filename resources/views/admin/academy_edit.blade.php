@extends('admin.dashboard')

@section('content-related')
    <div class="content academy-v2-container">
        <h1>Edit Academy</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <x-academy-form :action="route('admin.academy.update',$academy->id)" method="POST" :course="$academy"/>
    </div>
@endsection
