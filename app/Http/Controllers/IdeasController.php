<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;

class IdeasController extends Controller
{
    public function getIdeas(){
        return Idea::orderBy('id', 'DESC')->get();
    }
    public function saveIdea(Request $request){
        $this->validate($request, [
            'description' => 'required'
        ]);
        
        Idea::create($request->all());

        return;

    }
}
