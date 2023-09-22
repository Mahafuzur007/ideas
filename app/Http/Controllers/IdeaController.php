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
        return redirect()->route('ideas.show')->with('flash', 'Idea created successfully!');

        //to save the database
        // $idea->save();
    }
    public function destroy($id)
    {
        // Idea::destroy($id);

        // return redirect()->route('ideas.show')->with('flash', 'Idea deleted successfully!');

        try {
            $idea = Idea::findOrFail($id);
            $idea->delete();
            return redirect()->route('ideas.show')->with('flash', 'Idea deleted successfully!');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('ideas.show')->with('flash', 'Idea has already been deleted.');
        }
    }
}
