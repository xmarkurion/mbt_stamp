@extends ('layout')

@section ('page_title') Tracker @endsection

@section ('content')

    <h1> TRACKER ... <a href="{{ url('/video/create') }}">Register NEW Timestamp Operation</a></h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Stamped By</th>
            <th scope="col">Complete</th>
            <th scope="col">{{--Edit--}}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($videos as $video)
        <tr style=" @if ($video->complete) background: #1d2124 @endif">
            <th scope="row">{{ $video->id }}</th>
            <td><a href="{{ $video->mbt_link }}"> {{ $video->name }}</a></td>
            <td>{{ $video->user_id }}</td>
            <td> @if ($video->complete) <a style="color: green">YES</a> @endif @if (!$video->complete) <a style="color: red">NO</a>  @endif </td>
            <td><a href="{{ route('edit', [$video->id]) }}">EDIT</a></td>
        </tr>
            @endforeach
        </tbody>
    </table>

@endsection
