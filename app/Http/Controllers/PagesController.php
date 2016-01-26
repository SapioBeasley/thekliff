<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	public function showAbout()
	{
		return view('pages.about');
	}

	public function showShipping()
	{
		return view('pages.shipping');
	}

	public function showReturns()
	{
		return view('pages.returns');
	}

	public function showPrivacy()
	{
		return view('pages.privacy');
	}

	public function showFaq()
	{
		return view('pages.faq');
	}
}
