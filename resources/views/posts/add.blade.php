@extends('layouts.main')

@section('content')
    <div >
        <h1>Create New Post</h1>
    </div>
<div>
    <form method="POST" action="{{ route('storePost') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Example file input</label>
            <img >
            <input type="file" id="image" name="image" >
        </div>
        <div>
            <textarea id="caption" name="caption" value="{{ old('caption') }}" placeholder="Write a caption..."></textarea>
        </div>
        
        <button type="submit">Create Post</button>
    </form>
</div>

@endsection