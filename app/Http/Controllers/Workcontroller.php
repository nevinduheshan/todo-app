<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Workcontroller extends Controller
{
    public function __invoke()
    {
        return view('work');
    }
}
