<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store()
    {

        request()->validate([
            'idea' => 'required|min:1'
        ]);


        $idea = Idea::create(
            [
                'content' => request()->get('idea', 'null'),
            ]
        );
        return redirect()->route('idea.show')->with('flash', 'Idea created successfully!');

        //to save the database
        // $idea->save();
    }
}
