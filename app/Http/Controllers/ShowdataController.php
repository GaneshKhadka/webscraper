<?php

namespace App\Http\Controllers;

use App\Scraper;
use Illuminate\Http\Request;

class ShowdataController extends Controller
{
    public function showData()
    {
        $scrapers = Scraper::all();
        return view('showdata',compact('scrapers'));
    }
}
