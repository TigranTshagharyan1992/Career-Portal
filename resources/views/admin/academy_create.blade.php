@extends('admin.dashboard')

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

