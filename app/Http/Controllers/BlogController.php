<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Services\ArticleService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Show list of blog article.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ArticleService $articleService)
    {
        $articles = $articleService->all();

        return view('blog.index', compact('articles'));
    }
}
