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
    
    public function information(){
        return view('posts/information');
    }
    
    public function search(PostRequest $request)
    {
        $curl = curl_init();
        // $title = rawurlencode($request["title"]);
        // dd($title);
        $title = rawurlencode($request["title"]);
        $artist = rawurlencode($request["artist"]);
        $apikey = config('services.powerlyrics.apikey');
        curl_setopt_array($curl, [
        	CURLOPT_URL => "https://powerlyrics.p.rapidapi.com/getlyricsfromtitleandartist?title=${title}&artist=${artist}",
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
        //dd($response);
        // if (boolval($err)||!boolval($response['success'])) {
        if($err){
        	echo "cURL Error #:" . $err;
        	return view('posts/index');
        } else {
        	$response = json_decode($response,true);
        	return view('posts/search')->with([
        	    'title' => $request['title'],
        	    'artist' => $request['artist'],
                'lyrics' => $response['lyrics'],
            ]);
        }
    }
}
