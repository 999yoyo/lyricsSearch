<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index()
    {
        return view('posts/index');
    }
    public function search(PostRequest $request)
    {
        $curl = curl_init();
        $apikey = config('services.powerlyrics.apikey');
        curl_setopt_array($curl, [
        	CURLOPT_URL => "https://powerlyrics.p.rapidapi.com/getlyricsfromtitleandartist?title=Do%20You%20See&artist=Warren%20G",
        	CURLOPT_RETURNTRANSFER => true,
        	CURLOPT_FOLLOWLOCATION => true,
        	CURLOPT_ENCODING => "",
        	CURLOPT_MAXREDIRS => 10,
        	CURLOPT_TIMEOUT => 30,
        	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        	CURLOPT_CUSTOMREQUEST => "GET",
        	CURLOPT_HTTPHEADER => [
        		"X-RapidAPI-Host: powerlyrics.p.rapidapi.com",
        		"X-RapidAPI-Key: $apikey"
        	],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
        	echo "cURL Error #:" . $err;
        } else {
        	$response = json_decode($response,true);
        	//dd($response['lyrics']);
        }
        
        return view('posts/search')->with([
            'lyrics' => $response['lyrics'],
        ]);
    }
}
