<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Club;

class ClubController extends Controller
{
   	public function getList()
    {
    	$club = Club::all();
    	return view('admin.Club.List',['club' => $club]); 
    }

    public function getAdd()
    {
 		
    	$category = Category::all();
    	return view('admin.News.Add',['category'=> $category]);
    }

}
