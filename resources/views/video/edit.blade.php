@extends('layout')

@section ('page_title') EDIT Item @endsection

@section ('content')
    <form method="POST" action="/video/{{ $vid->id }}" class="pt-3">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="">ID: </label>
            <input type="text"
                   class="form-control " name="name" id="name" aria-describedby="helpId" value="{{ $vid->id }}" disabled>
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



        <div class="form-group">
            <label for="">Creation Date</label>
            <input type="text"
                   class="form-control" name="mbt_link" id="mbt_link" aria-describedby="helpId" placeholder="{{ $vid->created_at }}" disabled>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


@endsection
