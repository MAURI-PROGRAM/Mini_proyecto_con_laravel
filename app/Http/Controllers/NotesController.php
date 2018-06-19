<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notes;
class NotesController extends Controller
{
    //
    public function index(){
    	$notes=notes::all();
    	return view('notes/database',['notes'=>$notes]);
    }
    public function show(notes $note){
	    return view('notes/show',['note'=>$note]);
    }

    public function create(){
	    return view('notes.create');
    }
    public function store(){
    	notes::create(request()->all());
    	return redirect('/notes');
    }
}
