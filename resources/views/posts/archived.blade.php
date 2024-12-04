@extends('layouts.main')

@section('content')
<div>
  <a href="/posts/archived/export-pdf">Export PDF</a>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Caption</th>
          <th>Author</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach($archivedPosts as $archive)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $archive->caption }}</td>
            <td>{{ $archive->author->username }}</td>
            <td>{{ $archive->image }}</td>
            <td>
              <a href="/post/{{ $archive->id }}/restore">restore</a>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
@endsection