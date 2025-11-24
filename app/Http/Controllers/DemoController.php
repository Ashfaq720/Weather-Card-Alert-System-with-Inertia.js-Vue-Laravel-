<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DemoController extends Controller
{
    function index(Request $request)
    {
        $person = [
            'firstName' => 'John',
            'lastName' => 'Doe',
            'age' => 30,
            'email' => 'john.doe@example.com',
            'address' =>[
                'home' => 'Home Address',
                'office' => 'Office Address'
            ]
        ];
        return Inertia::render('Home',$person);
        // return Inertia::render('Home',[
        //     'name' => 'John Doe',
        //     'email' => 'john.doe@example.com'
        // ]);
    }
}
