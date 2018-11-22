<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use http\Env\Response;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.list', compact('posts'));
    }
    public function create() {
        return view('posts.create');
    }
    public function edit($id) {
        $post = Post:: findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, $id) {
        $post = Post:: findOrFail($id);
        $post->title = $request->input('title');
        $post->teaser = $request->input('teaser');
        $post->content = $request->input('content');
        $post->created = $request->input('created');
        $post->save();
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('posts.index');
    }
    public function view($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.view', compact('post'));
    }
    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->teaser = $request->input('teaser');
        $post->created = $request->input('created');
        $post->save();
        //dung session de dua ra thong bao
        Session::flash('success', 'Tạo mới thành công');
        return redirect()->route('posts.index');
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
