<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
	{
		return view('frontend.blog-listing');
	}

    public function show(Request $request, $blog_id)
	{
        $blog_prev_id = $blog_id - 1 > 0 ? $blog_id - 1 : null;
        $blog_next_id = $blog_id + 1 <= count(__('content.blog.details')) ? $blog_id + 1 : null;

		return view('frontend.blog-details', [
            'blog_id' => $blog_id,
            'blog_prev_id' => $blog_prev_id,
            'blog_next_id' => $blog_next_id,
        ]);
	}
}
