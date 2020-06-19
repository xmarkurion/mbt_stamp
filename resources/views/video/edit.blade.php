@extends('layouts.layout')

@section ('page_title') EDIT Item @endsection

@section ('content')
{{--    <form method="POST" action="/video/{{ $vid->id }}" class="pt-3">--}}
    <form method="POST" action="{{ route('video_update', [$vid->id]) }}" class="pt-3">
        @csrf
        @method('PUT')

        <div class="form-group" hidden>
            <label for="">ID: </label>
            <input type="text"
                   class="form-control" name="id" id="id" aria-describedby="helpId" value="{{ $vid->id }}" disabled>
        </div>

        <div class="form-group">
            <label for="">Title</label>
            <input type="text"
                   class="form-control" name="name" id="name" aria-describedby="helpId" value="{{ $vid->name }}" required>
        </div>

        <div class="form-group">
            <label for="">MBT-link</label>
            <input type="text"
                   class="form-control" name="mbt_link" id="mbt_link" aria-describedby="helpId" value="{{ $vid->mbt_link }}" required>
        </div>

        Check this checkbox if timestamp is complete:
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="complete" id="complete" value="{{ $vid->complete }}" @if ($vid->complete) checked @endif>
            <label class="custom-control-label" for="complete">Complete</label>
        </div>

        <div class="pt-2 form-group">
            <label for="">Creation Date</label>
            <input type="text"
                   class="form-control" name="mbt_link" id="mbt_link" aria-describedby="helpId" placeholder="{{ $vid->created_at }}" disabled>
        </div>

        <div class="pt-2 form-group">
            <label for="">Update Date</label>
            <input type="text"
                   class="form-control" name="mbt_link" id="mbt_link" aria-describedby="helpId" placeholder="{{ $vid->updated_at }}" disabled>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <form method="POST" action="{{ route('video_delete', [$vid->id]) }}" class="pt-4">
        @csrf
        @method('PUT')
        <button type="submit" class="btn btn-danger">Delete Record</button>
    </form>

@endsection
