@extends ('layout')

@section ('page_title') Tracker @endsection

@section ('content')

    <h1> TRACKER ... <a href="#">Register NEW Timestamp Operation</a></h1>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Stamped By</th>
            <th scope="col">Complete</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Tom Campbell: MBT Moving Forward</td>
            <td>Jerry</td>
            <td>False</td>
            <td>EDIT</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Tom Campbell: MBT Moving Forward</td>
            <td>Otto</td>
            <td>False</td>
            <td>EDIT</td>
        </tr>
        </tbody>
    </table>

@endsection
