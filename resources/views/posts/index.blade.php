@extends('layouts.main')

@section('content')
    {{-- <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Caption</th>
          <th>Author</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach($posts as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->caption }}</td>
            <td>{{ $post->author->username }}</td>
            <td>{{ $post->image }}</td>
            <td>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table> --}}
    <div class="bg-white py-5 sm:py-5">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-0 lg:mx-0 lg:max-w-none lg:grid-cols-1">
          
          @foreach ($posts as $post)
            <article class="flex max-w-xl flex-col items-start justify-between">
              <div class="relative mt-8 flex items-center gap-x-4">
                <svg class="size-7 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                </svg>
                <div class=" flex text-sm/6">
                  <p class="font-semibold text-gray-900">
                    <a href="#">
                      <span class="absolute inset-0"></span>
                      {{ $post->author->name }} 
                    </a>
                  </p>
                  <time datetime="2020-03-16" class="text-gray-500"> {{ $post->created_at->diffForHumans() }}</time>
                </div>
              </div>
              <div class="flex items-center justify-center gap-x-4 text-xs">
                  @if($post->image)
                  <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/'. $post->image) }}" class="img-fluid" alt="{{ $post->image }}">
                  </div>
                  @else
                    <img src="https://picsum.photos/400/600" alt="Dummy Image">
                  @endif
              </div>
              <div class="text-xs">
                <a hresf="#" class="font-medium text-dark">{{ $post->author->username }}</a>
          <p class="text-gray-500">{{ $post->caption }}</span>
              </span>
            </article>
            @endforeach
    
          <!-- More posts... -->
        </div>
      </div>
    </div>
    
@endsection