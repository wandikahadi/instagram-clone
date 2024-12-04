@extends('layouts.main')

@section('content')
    {{-- <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>username</th>
                    <th>myPost</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ Auth::user()->name }}</td>
                    <td>{{ Auth::user()->username }}</td>
                    <td>
                        <ul>
                        @foreach ($posts as $post)
                            <li>{{ $post->caption }}</li>
                            <li>
                                <form action="/post/archive/{{ $post->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">delete</button>
                                </form>
                            </li>
                        @endforeach
                        </ul>
                    </td>
                    <td>
                        <a href="{{ route('editProfile') }}">Edit Profile</a>
                        <a href="{{ route('archived') }}">View Archive</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> --}}
    <div class="flex pl-4 pr-3 mb-3">
        <div class="w-1/4">
            @if (Auth::user()->avatar)
                <img src="{{ url('uploads/cover/'.$draft->cover) }}" class="card-img-top" alt="image-card">
            @else
                <svg class="size-40 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
              </svg>
            @endif
                {{-- <img class="w-32 h-32 rounded-full" src="img/wandika.jpeg" alt=""> --}}
        </div>
        <div class="w-3/4">
            <div class="flex gap-2">
                <div>{{ Auth::user()->username }}</div>
                <a class="bg-gray-300 px-2 py-1 rounded-md" href="{{ route('editProfile') }}">Edit Profile</a>
                <a class="bg-gray-300 px-2 py-1 rounded-md" href="{{ route('archived') }}">View Archive</a>
                <a href="">
                    <svg class="w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/>
                    </svg>
                </a>
            </div>
            <div class="flex gap-3">
                <a href="">0 posts</a>
                <a href="">0 followers</a>
                <a href="">0 following</a>
            </div>
            <div class="flex">
                <div>{{ Auth::user()->name }}</div>
            </div>
        </div>
    </div>
@endsection