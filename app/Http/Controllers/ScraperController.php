<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use App\Scraper;

class ScraperController extends Controller
{

    public function index(){
        return view('welcome');
    }
    public function store(Request $r)
    {
        $url=$r->url;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
        $content = curl_exec($ch);
        curl_close($ch);
        return view('scraper',compact('content'));
    }
    public function saveData(Request $reqs){

        $input = $reqs->all();
        foreach($reqs->title as $key => $value) {
            Scraper::Create(array(
                'title' => $value,
                'category' => $input['category'][$key],
                'address' => $input['address'][$key],
                'phone' => $input['phone'][$key],
                'email' => $input['email'][$key],
            ));
        }

        return redirect(url('scraper'));
    }

}
