<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
   	public function index()
	{
		return view('pages.index', [
			'pages' => Page::paginate(9)
		]);
	}

	public function show(Page $page)
	{
		return view('pages.show', compact('page'));
	}

	public function bySlug($slug)
	{
		return view('pages.show', [
			'page' => Page::where('slug', $slug)->first()
		]);
	}
}
