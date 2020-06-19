<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Link</th>
        <th>Stamped By</th>
        <th>Stamped user ID</th>
        <th>Complete</th>
        <th>Updated at</th>
        <th>Created at</th>
    </tr>
    </thead>
    <tbody>
    @foreach($videos as $video)
        <tr>
            <td>{{ $video->id }}</td>
            <td>{{ $video->name }}</td>
            <td>{{ $video->mbt_link }}</td>
            <td>{{ $video->user->name }}</td>
            <td>{{ $video->user_id }}</td>
            <td> @if ($video->complete) YES @endif @if (!$video->complete) NO  @endif </td>
            <td>{{ $video->created_at }}</td>
            <td>{{ $video->updated_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
