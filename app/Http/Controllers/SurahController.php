<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurahController extends Controller
{
    //
    public function show(){

        $response = Http::get('https://api.quran.gading.dev/surah')->collect();
        $surahs = $response['data'];

        return view('surah', [
            'surahs' => $surahs,
        ]);
    }

    public function ayat(int $id){

        $response = Http::withUrlParameters([
            'endpoint' => 'https://api.quran.gading.dev/surah',
            'reference' => $id,
        ])->get('{+endpoint}/{reference}');

        if ($response->ok()) {
            $response = Http::get('https://api.quran.gading.dev/surah/'.$id)->collect();
            $surah = $response['data']['name'];
            $prebismillah = $response['data']['preBismillah'];
            $verses = $response['data']['verses'];
        } else {
            abort(404);
        };

        return view('ayat', [
            'preBismillah' => $prebismillah,
            'verses' => $verses,
            'surah' => $surah,
        ]);
    }
}
