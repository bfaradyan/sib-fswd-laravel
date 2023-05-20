<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DataViewController extends Controller
{
    //
    public function show(): View
    {
        return view('statics-data');
    }
}
