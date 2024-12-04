<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            "posts" => Post::with(['author'])->get()
        ]);
    }
    public function addPost()
    {
        return view('posts.add');
    }
    public function storePost(Request $request)
    {
        $validatedData = $request->validate([
            'caption' => '',
            'image' => '',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        Post::create($validatedData);
        return redirect('/posts');
    }

    public function archived(){
        $archivedPosts = Post::onlyTrashed()->get();
        return view('posts.archived', compact('archivedPosts'));
    }
    public function restore($id){
        $restore = Post::withTrashed()->where('id',$id)->restore();
        return redirect()->route('posts');
    }
    public function archive(string $id){
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('profile');
    }
    public function exportPdf(){
        $archivedPosts = Post::onlyTrashed()->get();
        $pdf = Pdf::loadView('posts.archived',compact('archivedPosts'));
        return $pdf->download('archived-posts'.now()->timestamp.'.pdf');
    }
}
