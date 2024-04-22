<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\staff;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){
        $posts = post::all();

        return view('post', ['posts' => $posts]);
    }

    public function store(Request $request){
        
        $request->validate([
          'postImage' => 'nullable|image|mimes:jpeg,png,jpg,gif'
      ]); 
  
  if ($request->hasFile('postImage')) {
      $uploadedFile = $request->file('postImage');

      $customerFileName = time() . '.' . $uploadedFile->getClientOriginalExtension();
      
      $uploadedFile->storeAs('public/images/posts', $customerFileName);
  }
  post::create([
      'user_id' => auth()->user()->id,
      'title' => $request->title,
      'image' => $customerFileName,
      'message' => $request->message,
  ]);
  return redirect()->back()->with('success', 'Post Created Successfully');
}

public function destroy(post $post){
    if($post->image){
        unlink(public_path('storage/images/posts/') . $post->image);
    }

    $post->delete();
    return redirect()->back();
}

}
