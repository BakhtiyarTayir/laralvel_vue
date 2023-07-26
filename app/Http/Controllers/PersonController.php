<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
       return [
           [
               'name' => 'Petr',
               'age' => 23,
               'job' => 'Tester',
           ],
       ];
    }
}
