<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\BannerAdvertisemenet;
use Illuminate\Http\Request;

class ArticleNewsController extends Controller
{
    public function index()
    {
        $articles = ArticleNews::all();
        $banners = BannerAdvertisemenet::all(); 
        return view('article_news.index', compact('articles',  'banners'));
    }
    
    public function show($slug)
    {
        $article = ArticleNews::where('slug', $slug)->firstOrFail();
        return view('article_news.show', compact('article'));
    }

}
