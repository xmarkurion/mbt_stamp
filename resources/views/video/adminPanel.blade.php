@extends('layouts.layout')

@section ('page_title') Admin Panel @endsection

@section('active_status_admin_panel') active @endsection

@section('content')

    <div class="container text-center">
        <form method="POST" action="{{ route('admin_update_name', [$usero->id]) }}" class="pt-4">
            @csrf
            @method('PUT')

            <div class="input-group mb-3">
                <input type="text" class="form-control" value="{{ $usero->name }}" aria-label="Recipient's username" aria-describedby="button-addon2" name="display_name">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Save your Display Name</button>
                </div>
            </div>

        </form>
    </div>

{{--    This is CVS Section For Data download.--}}

    <div class="container text-center">
    <form method="POST" action="{{ route('generate_csv') }}" class="pt-4">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-secondary">Download CSV Copy of table</button>
    </form>
    </div>

    </div>

    @endsection






