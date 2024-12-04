@extends('layouts.auth')

@section('content')
    {{-- <div>
        <form action="{{ route('doLogin') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="email"/>
            <input type="password" name="password" placeholder="password"/>
            <button type="submit">Sign in</button>
        </form>
    </div> --}}
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h1 class="mt-10 text-center text-4xl/9 font-bold tracking-tight text-gray-900">Instagram</h1>
        </div>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-3" action="{{ route('doLogin') }}" method="POST">
                @csrf
            <div>
                <input type="email" name="email" id="email" placeholder="Email" required class="block w-full rounded-sm bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Password" required class="block w-full rounded-sm bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-blue-600 sm:text-sm/6">
            </div>
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Log in</button>
            </div>
          </form>
      
          <p class="mt-10 text-center text-sm/6 text-gray-500">
            Don't have an account?
            <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:text-blue-500">Sign up</a>
          </p>
        </div>
      </div>
@endsection