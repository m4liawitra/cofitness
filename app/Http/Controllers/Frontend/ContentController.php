<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ContentController extends Controller
{
    public function index(Request $request)
	{
		switch (Route::currentRouteName()) {
            case 'content.about': return view('frontend.about'); break;
            case 'content.services': return view('frontend.services'); break;
            case 'content.programs': return view('frontend.programs'); break;
            case 'content.features': return view('frontend.features'); break;
        }
	}
}
