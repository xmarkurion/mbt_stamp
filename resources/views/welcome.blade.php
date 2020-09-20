@extends ('layouts.layout')

@section ('page_title') Home @endsection

@section('active_status_home') active @endsection

@section ('content')
        <div class="flex-center position-ref full-height">
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

            <div class="container text-center">
                <h2><p class="pb-1 pt-4"> Welcome  {{ Auth::user()->name }}, <br>Thanks for your contribution in this Timestamping project.</p></h2>
                <p class=""><h3> Total videos in database {{ $total_videos }} and {{ $procent_completed }}% of them are timestamped.</h3></p>
                <p class="pb-3">For any questions please contact MAREK on Slack or send a message.</p>
                <p class="">-----------------------------</p>
                <p class="">This is a system for tracking timestamped Videos.</p>
                <p class="">-----------------------------</p>

                <p class="">Click on My Tracker in menu to add tracked title.</p>
                <p class="">Then click on Add new Timestamp Operation fill the title and link.</p>
                <p class="">To get the link just copy link from browser mbt-guide and paste it in with https://</p>
                <p class="">Example of the link: https://mbt-guide.netlify.app/iz-JB_dxv9g</p>
                <p class="">To update state of complete just click edit near your entry.</p>
                <p class="">Inside check checkbox complete & click Submit.</p>
                <p class="">-----------------------------</p>


            </div>
                @foreach ($posts as $post)
                <div class="pb-2 card" style="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $post->excerpt }}</h6>
                        <p class="card-text">{{ $post->body }}</p>
                       <?php # <a href="#" class="card-link">Another link</a> ?>
                    </div>
                </div>
                @endforeach
            <br>



        </div>

   @endsection
