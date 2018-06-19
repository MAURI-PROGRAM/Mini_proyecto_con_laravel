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
    	$note=new notes;
    	$note->title=request()->title;
    	$note->body=request()->body;
    	$note->important=is_null(request()->important) ? 0: 1;
    	$note->save();
    }
}
