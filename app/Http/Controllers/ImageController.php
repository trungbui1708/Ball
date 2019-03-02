<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\News;

class ImageController extends Controller
{
     public function getList()
    {
    	$image = Image::all();
    	return view('admin.Image.List',['image'=>$image]);
    }
    public function getAdd()
    {
    	$news = News::all();
    	return view('admin.Image.Add',['news'=>$news]);
    }

    public function postAdd(Request $request)
    {
    	$this->validate($request,
    	['file'=> 'required','news'=>'required'],
    	[
    		'news.required'=> 'Please choose the News',
    		'file.required'=> 'Please choose the image'
    		

    ]);
    	if ($request -> hasFile('file')) 
        {

            $filename = $request -> file->getClientOriginalName();
            $request ->file->storeAs('upload/news', $filename);
            $file = new Image;
            $file -> name = $filename;
            $file -> news_id = $request -> news;
    		// dd($request->file);
    		$file -> save();
    	
        }
       
    	
    	return redirect ('admin/image/add') -> with('notifi','Thêm thành công');
    	
    }
    public function getDelete ($id)
    {
    	$image = Image::find($id);
        $image -> delete();
        return redirect ('admin/image/list') -> with('notifi','Delete successfully');
    }
}
