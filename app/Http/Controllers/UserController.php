<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function register(){
        return view('auth.register');
    }
    public function doRegister(Request $request){
        $regis = User::create($request->all());
        event(new Registered($regis));
        Auth::login($regis);
        return redirect()->route('login');
    }
    public function login(){
        return view('auth.login');
    }

    public function doLogin(Request $request){
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        
        if (Auth::Attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('posts');
        }else{
            return redirect('/login');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/register');
    }
    
    public function profile(){
        $posts= Post::where('user_id', auth()->user()->id)->get();
        return view('profile.index', compact('posts'));
    }
    public function editProfile(){
        return view('profile.edit');
    }
    public function updateProfile(User $user, Request $request){
        $rules = [
            'name' => 'max:255',
            'username' => 'max:255',
            'avatar' => 'image|file|max:1024',
        ];
        $validatedData = $request->validate($rules);

        $newName='';

        if($request->file('avatar')){
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $newName = $request->nama.'-'.now()->timestamp.'.'.$extension;
            $request->file('avatar')->storeAs('images', $newName);
        }

        $request['avatar'] = $newName;

        User::where('id', Auth::user()->id)->update($request->all());
        return redirect('/profile');
    }
}
