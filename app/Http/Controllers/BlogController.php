<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Sapioweb\CrudHelper\CrudyController as CrudHelper;

class BlogController extends Controller
{
	public function index()
	{
		return view('blog.blog');
	}

	public function create()
	{
		return view('blog.create');
	}

	public function store(Request $request)
	{
		$blogData = $request->all();

		$blog = Blog::create([
			'title' => $blogData['title'],
			'content' => $blogData['content'],
		]);
	}

	public function show($id)
	{
		return view('blog.blogSingle');
	}
}
