<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('page_title') </title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <style>

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="{{ route('home_page') }}">{{ config('app.name', 'Laravel') }}</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item @yield('active_status_home')">
                <a class="nav-link" href="{{ route('home_page') }}">Home</a>
            </li>
            <li class="nav-item @yield('active_status_all_tracker')">
                <a class="nav-link" href="{{ route('tracker_page') }}">ALL Tracker</a>
            </li>
            <li class="nav-item @yield('active_status_my_tracker')">
                <a class="nav-link" href="{{ route('my_tracker_page') }}">MY Tracker</a>
            </li>

{{--            @if (Auth::user()->id == config('app.admin'))   Sec check admin off      --}}
            <li class="nav-item @yield('active_status_admin_panel')">
                <a class="nav-link" href="{{ route('admin_panel') }}">Admin Panel</a>
            </li>
{{--            @endif    --}}
        </ul>
        <p class="form-inline my-2 my-lg-0">
            <b>{{ Auth::user()->name }}</b>
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </p>
    </div>
</nav>
    </div>
</nav>

<div class="container">
    @yield ('content')
</div>

<footer class="blog-footer p-5">
    <div class="card">
        <div class="card-header">
            By <a href="https://www.markurion.eu"> Markurion 2020 </a> for MBT - Timestamping app
        </div>
    </div>
</footer>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
