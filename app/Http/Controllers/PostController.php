<?php

namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
	{
		return view('posts.index', [
			'posts' => Post::paginate(3)
		]);
	}

	public function show(Post $post)
	{
		return view('posts.show', compact('post'));
	}

	public function bySlug($slug)
	{
		return view('posts.show', [
			'post' => Post::where('slug', $slug)->first()
		]);
	}
}
