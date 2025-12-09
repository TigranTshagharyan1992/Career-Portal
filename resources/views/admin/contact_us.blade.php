@extends('admin.dashboard')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-academy-v2.css') }}">
@endsection
@section('content-related')
    <div class="content academy-v2-container">

        <!-- Content -->
        <div id="content" class="">

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

                                <input type="submit" value="Search" class="academy-v2-search-btn">
                            </form>
                        </div>

                        <!-- Table -->
                        <div class="results">
                            <table id="result_list" class="academy-v2-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Message</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($contactMessages as $contact)
                                    <tr>
                                        <td>{{ $contact->Name . ' ' .$contact->Surname }}</td>
                                        <td>{{ $contact->Phone}}</td>
                                        <td>{{ $contact->Email}}</td>
                                        <td>
                                            {{
                                                $contact->created_at
                                                    ? date('F j, Y', strtotime($contact->created_at))
                                                    : ($contact->time_create
                                                        ? date('F j, Y', strtotime($contact->time_create))
                                                        : 'N/A'
                                                      )
                                            }}
                                        </td>
                                        <td>{{ substr($contact->Message, 0, 100,) }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="academy-v2-pagination">
                            {{ $contactMessages->appends(request()->input())->links() }}
                        </div>

                    </div>
                </div>
            </div>

            <br class="clear">
        </div>

        <div id="footer"></div>
    </div>
@endsection
