<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage() {
        $ourName = 'Harsh';
        $animals = ['Meowalot', 'Barksalot', 'Purrsloud'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meowalot']);
    }

    public function aboutpage() {
        return '<h1>About Page!!</h1><a href="/">Back to Home</a>';
    }
}
