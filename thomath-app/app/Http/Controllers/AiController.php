<?php

namespace App\Http\Controllers;
use Config;
use Illuminate\Http\Request;

class AiController extends Controller
{
    public function searchVideoView(){
        return view('ai.video', ['data'=>" "]);
    }
    public function searchVideo(Request $request){
        //google api
        //alternate1
        // $apikey = Config::get('config.GOOGLE_API_1');
        $apikey = Config::get('config.GOOGLE_API_2');
        $keyword = urlencode($request->keyword);
        $blockWords = ['sexy', 'sex', 'xxx', 'hiburan', 'lucu', 'bokep', 'mobile+legend', 'mobile+legends', '+18', 'funny'];
        if(0 < count(array_intersect(array_map('strtolower', explode(' ', $keyword)), $blockWords))){
            $value['items'] = null;
            return view('ai.video', ['data'=>"Hasil Pencarian Tidak Ditemukan"]);
        }else{
            $googleApiUrl = 'https://www.googleapis.com/youtube/v3/search?part=snippet&q=' . $keyword . '&maxResults=' . 12 . '&key=' . $apikey;
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);

            curl_close($ch);
            $data = json_decode($response);
            $value = json_decode(json_encode($data), true);
        }
        
        return view('ai.video', ['data'=>$value['items']]);
    }
}
