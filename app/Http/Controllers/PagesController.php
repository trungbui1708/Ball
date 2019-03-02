<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Image;
use App\Category;
use App\Tournament;

class PagesController extends Controller
{
    function __construct()
    {
    	$news = News::all();
    	$image = Image::all();
    	view()->share('news',$news);
    	view()->share('image',$image);
    }
    function index()
    {
        
        $news = News::all();
        $tournament = Tournament::all();
    	$category = Category::all();
    	return view('index.Page.index',['category'=>$category,'news'=>$news,'tournament'=>$tournament]);
    }
    public function news($id)
    {	
        $tournament = Tournament::all();
        $image = Image::where('news_id', $id)->get();
    	$category = Category::all();
    	$news = News::find($id);
    	return view('index.Page.news',['news'=>$news,'category'=>$category,'tournament'=>$tournament,'image'=>$image]);
    }
    public function list_news()
    {
        $category = Category::all();
        $tournament = Tournament::all();
        $news =News::all();
        $image = Image::all();
        return view('index.Page.list-news',['news'=>$news,'category'=>$category,'tournament'=>$tournament,'image'=>$image]);
    }
}
