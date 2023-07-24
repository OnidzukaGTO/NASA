<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NasaApiController extends BaseController
{
    public function index(){
        $response = Http::get('https://api.nasa.gov/planetary/apod?api_key=QALhtF6JaMpmZWKiyNoRMz4H9AOvT5Wqg6kEXO8w');
        $response = json_decode($response->body());
        $url = $response->url;
        $date = $response->date;
        $text = $response->explanation;
        return view('welcome', compact('url', 'date', 'text'));
    }

    public function show(Request $request){
        if (!$request->input('date')){
           return redirect()->back();
        }
        try {
            $response = Http::get('https://api.nasa.gov/planetary/apod?api_key=QALhtF6JaMpmZWKiyNoRMz4H9AOvT5Wqg6kEXO8w&date=' . $request->input('date'));
            $response = json_decode($response->body());
            $url = $response->url;
            $date = $response->date;
            $text = $response->explanation;
        } catch (Exception $e) {
            return abort('404');
        }
        return view('welcome', compact('url', 'date', 'text'));
    }
}
