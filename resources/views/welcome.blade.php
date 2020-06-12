@extends ('layout')

@section ('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container text-center">
               <p class="pt-5">This is an system for tracking timestamped Videos.</p>
                <p>For anny questions please contact me on Slack or send a message.</p>
            </div>
        </div>

   @endsection
