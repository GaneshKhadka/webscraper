<?php

namespace App\Http\Controllers;



use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use App\Scraper;
use App\Urldata;

class ScraperController extends Controller
{

    public function index(){
        return view('welcome');
    }

//    public function urlStore(Request $req)
//    {
//        $req->session()->push('number', [
//            'a'=>'abc',
//            'b'=>'bbb'
//        ]);
//        dd(\Session()->get('number'));
//        return view('scraper',compact('content'));
//    }

//    public function urlSave(Request $request)
//    {
//       $request->all();
//        $request->session()->push('number', [
//            '0'=>'A.com/1',
//            '1'=>'A.com/2'
//        ]);
//        $a=\Session()->getfirst('title');
//        return view('scraper',compact('content','a'));
//}
    public function store(Request $r)
    {
        $urlData=Urldata::orderBy('created_at', 'desc')->first();
        if($urlData->current == $urlData->total_pages){
            return redirect(url('scraper'));
        }
//        $a=urlSave::where('status',0)->first();
        $count=$urlData->current + 1;
        $url=$urlData->url.'/'.$count;

                $ch = curl_init($url);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
                $content = curl_exec($ch);
        //        dd($content);
                curl_close($ch);
        $urlUpdate=Urldata::find($urlData->id);
        $urlUpdate->current=$urlData->current+1;
        $urlUpdate->save();
//        $r->session()->push('number', [
//            '0'=>'A.com/1',
//            '1'=>'A.com/2'
//        ]);
//        session('session'=>$data);
        // dd($r->session()->pull('product1'));
//         session()->forget('title');

//        $r->session()->push('title', 'category');

     //   $a=\Session()->get('title');
//        dd($a[0]);


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

        return redirect(route('scrapers'));
    }

}
