@extends('layouts.main')

@section('content')
    {{-- <div>
        <form action="/profile/edit" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" placeholder="name" value="{{ old('name', Auth::user()->name) }}">
            <button type="submit">Save</button>
        </form>
    </div> --}}
    <form action="{{ route('updateProfile') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
            <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <div class="shrink-0 select-none text-base text-gray-500 sm:text-sm/6">instagram.com/</div>
                    <input type="text" name="username" id="username" class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6" placeholder="janesmith" value="{{ old('username', Auth::user()->username) }}">
                  </div>
                </div>
              </div>
      
              <div class="col-span-full">
                <label for="bio" class="block text-sm/6 font-medium text-gray-900">bio</label>
                <div class="mt-2">
                  <textarea name="bio" id="bio" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                </div>
                <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences about yourself.</p>
              </div>
      
              <div class="col-span-full">
                <label for="avatar" class="block text-sm/6 font-medium text-gray-900">Photo</label>
                <input type="hidden" name="oldImage" value="{{ Auth::user()->avatar }}">
                <div class="mt-2 flex items-center gap-x-3">
                  <svg class="size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                  </svg>
                  <input type="file" name="avatar" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"></input>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>

      <script>
        // preview image yang akan diupload
        function previewImage()
        {
            const image = document.querySelector('#avatar');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
      </script>
      
@endsection