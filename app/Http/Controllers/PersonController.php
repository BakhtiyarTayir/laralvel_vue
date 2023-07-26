<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Petr',
                'age' => 23,
                'job' => 'Tester',
            ],
            [
                'id' => 2,
                'name' => 'John',
                'age' => 35,
                'job' => 'developer',
            ],
            [
                'id' => 3,
                'name' => 'Dani',
                'age' => 23,
                'job' => 'Manager',
            ],
            [
                'id' => 4,
                'name' => 'Piter',
                'age' => 28,
                'job' => 'ceo',
            ],
        ];
       return $persons;
    }
}
