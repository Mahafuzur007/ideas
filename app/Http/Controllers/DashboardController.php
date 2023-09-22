<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {
        //Way-01:
        // $idea->content = 'test';
        // $idea->likes = 0;

        //Way-02:

        return view('dashboard', [
            'ideas' => Idea::orderBy('created_at', 'DESC')->paginate(5)
        ]);
    }
}
