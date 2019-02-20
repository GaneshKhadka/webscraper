<?php

namespace App\Http\Controllers;
use App\Urldata;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function store(Request $request)
    {
//        dd($request->all());
        $url=new Urldata;
        $url->url=$request->url;
        $url->current='0';
        $url->total_pages=$request->number;
        $url->save();
        return redirect(route('scrapers'));
    }
}
