<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store()
    {
        $idea = Idea::create(
            [
                'content' => request()->get('idea', 'null'),
            ]
        );
        return redirect()->route('idea.show');

        //to save the database
        // $idea->save();
    }
}