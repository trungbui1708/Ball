<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Round;
use App\Tournament;

class RoundController extends Controller
{
    public function getList()
    {
    	$round = Round::all();
    	$tournament = Tournament::all();
    	return view('admin.Round.List',['round' => $round,'tournament'=>$tournament]); 
    }

    public function getAdd()
    {
 
    	$tournament = Tournament::all();
    	return view('admin.Round.Add',['tournament'=> $tournament]);
    }

    public function postAdd(Request $request)
    {
    	$this -> validate($request,[
    		'tournament'=>'required',
    		'round_number'=>'required|min:3|unique:rounds,round_number',
    		],[
    		'tournament.required'=>'You have not entered tournament name',
    		'round_number.required'=>'You have not entered a round_number',
    		'round_number.min'=>'round_number at least 3 characters',
    		'round_number.unique'=>'round_number already exists',
    		]);
    	$round = new Round;
    	$round -> tournament_id = $request -> tournament;
    	$round-> round_number = $request -> round_number;
    	$round -> save();
    	return redirect ('admin/round/add') -> with('notifi','Add successfully');
    }
    public function getDelete($id)
    {
        $round = Tournament::find($id);
        $round -> delete();

        return redirect('admin/round/list') -> with('notifi','Delete successfully');
    }
}
