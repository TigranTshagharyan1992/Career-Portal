@extends('admin.dashboard')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-academy-v2.css') }}">
@endsection

@section('content-related')
    <div class="content academy-v2-container">

        <!-- Content -->
        <div id="content" class="">

            <div class="academy-v2-header">
                <div></div>
                <a href="{{ route('admin.academy.create') }}" class="academy-v2-add-btn">
                    Add Course
                </a>
            </div>

            <div id="content-main">

                <div class="module" id="changelist">
                    <div class="changelist-form-container">

                        <!-- Search Toolbar -->
                        <div id="toolbar" class="academy-v2-toolbar">
                            <form action="{{ route('admin.academy') }}" id="changelist-search" method="get" class="academy-v2-search-form">
                                <label for="searchbar">
                                    <img src="{{ asset('admin/img/search.svg') }}" alt="Search" class="academy-v2-search-icon">
                                </label>
                                <input type="text" size="40" name="academy_name" value="{{ request('academy_name')??'' }}" id="searchbar" class="academy-v2-search-input">
                                <label>
                                    <input type="checkbox" name="only_active" value="1"
                                        {{ request('only_active') ? 'checked' : '' }}>
                                    Only Active
                                </label>

                                <input type="submit" value="Search" class="academy-v2-search-btn">
                            </form>
                        </div>

                        <!-- Table -->
                        <div class="results">
                            <table id="result_list" class="academy-v2-table">
                                <thead>
                                <tr>
                                    <th>Course name</th>
                                    <th>Deadline</th>
                                    <th>Created time</th>
                                    <th>Active</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($academies as $academy)
                                    <tr>
                                        <th><a href="{{ route('admin.academy.edith', $academy->id) }}" class="academy-v2-course-link">{{ $academy->Course_name }}</a></th>
                                        <td>{{ $academy->Deadline->format('F j, Y') }}</td>
                                        <td>{{ $academy->time_create->format('M. j, Y, g:i a') }}</td>
                                        <td>
                                            @if($academy->is_active)
                                                <img src="{{ asset('admin/img/icon-yes.svg') }}" alt="True" class="academy-v2-icon">
                                            @else
                                                <img src="{{ asset('admin/img/icon-no.svg') }}" alt="False" class="academy-v2-icon">
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="academy-v2-footer-count">
                            {{ count($academies) }} Academy
                        </div>

                        <div class="academy-v2-pagination">
                            {{ $academies->appends(request()->input())->links() }}
                        </div>

                    </div>
                </div>
            </div>

            <br class="clear">
        </div>

        <div id="footer"></div>
    </div>
@endsection
