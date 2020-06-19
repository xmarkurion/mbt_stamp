@extends('layouts.layout')

@section ('page_title') Admin Panel @endsection

@section('active_status_admin_panel') active @endsection

@section('content')

    <div class="container text-center">
    <form method="POST" action="{{ route('generate_csv') }}" class="pt-4">
        @csrf
        @method('GET')
        <button type="submit" class="btn btn-secondary">Download CSV Copy of table</button>
    </form>
    </div>

    @endsection






