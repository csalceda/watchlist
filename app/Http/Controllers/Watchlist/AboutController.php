<?php

namespace App\Http\Controllers\Watchlist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('watchlist.about.index');
    }
}
