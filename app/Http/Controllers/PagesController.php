<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $first = 'Ghislain';
        $last = 'de Blois';
        return view('pages.about', compact('first', 'last'));
        
    }
}
