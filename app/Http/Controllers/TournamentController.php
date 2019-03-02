<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;

class TournamentController extends Controller
{
   public function getList()
    {
    	$tournament = Tournament::all();
    	return view('admin.Tournament.List',['tournament'=>$tournament]);
    }

    public function getAdd()
    {
    	return view('admin.Tournament.Add');
    }

    public function postAdd(Request $request)
    {
    	$this-> validate($request,
    	['name'=> 'required|min:3|max:100|unique:tournaments,name'],
    	[
    		'name.required'=> 'Please enter the tournament name',
    		'name.min'=> 'Length must be over 3 characters',
    		'name.max'=> 'Length is shorter than 100 characters',
            'name.unique'=>'Tournament name already exists'

    ]);
    	$tournament = new Tournament;
    	$tournament-> name = $request -> name;
    	$tournament -> save();
    	return redirect ('admin/tournament/add') -> with('notifi','Thêm thành công');
    }
    public function getDelete($id)
    {
        $tournament = Tournament::find($id);
        $tournament -> delete();

        return redirect('admin/tournament/list') -> with('notifi','Delete successfully');
    }
}
