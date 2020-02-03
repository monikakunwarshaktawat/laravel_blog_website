<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\user\comment;
class CommentController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
            'body'=>'required',
        ]);
   
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
    
        comment::create($input);
    
        return back();
    }
}
