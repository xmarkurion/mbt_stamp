@extends('layout')

@section ('page_title') Create -> new Time Stamped Record @endsection

@section ('content')
    <form method="POST" action="{{ url('video/Tracker') }}" class="pt-3">
        @csrf
    <div class="form-group">
            <label for="">Title</label>
            <input type="text"
                   class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" value="{{ old('name') }}" required>

        </div>

        <div class="form-group">
            <label for="">MBT-link</label>
            <input type="text"
                   class="form-control" name="mbt_link" id="mbt_link" aria-describedby="helpId" placeholder="" value="{{ old('name') }}" required>


        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


@endsection
