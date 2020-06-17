@extends ('layouts.layout')

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
                <h2><p class="pb-1 pt-4"> Welcome  {{ Auth::user()->name }}, <br>Thanks for your contribution in this Time stamping project.</p></h2>
               <p class="pt-2">This is an system for tracking timestamped Videos.</p>
                <p class="pb-5">For anny questions please contact me on Slack or send a message.</p>
                <p class="pb-5">Click on Tracker in left corner to add tracked title.</p>
            </div>
                @foreach ($posts as $post)
                <div class="pb-2 card" style="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $post->excerpt }}</h6>
                        <p class="card-text">{{ $post->body }}</p>
                        <a href="#" class="card-link">Card link</a>
                       <?php # <a href="#" class="card-link">Another link</a> ?>
                    </div>
                </div>
                @endforeach
            <br>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="933" height="525" src="https://www.youtube.com/embed/ogmBfwcIhug" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>


        </div>

   @endsection
