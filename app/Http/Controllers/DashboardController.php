<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        $users = [
            [
                'name' => 'Alex',
                'age' => 30,
            ],
            [
                'name' => 'Dan',
                'age' => 35,
            ],

            [
                'name' => 'Jhon',
                'age' => 17,
            ],

            [
                'name' => 'Ela',
                'age' => 16,
            ]
        ];


        return view('dashboard', ['users' => $users]);
    }
}
