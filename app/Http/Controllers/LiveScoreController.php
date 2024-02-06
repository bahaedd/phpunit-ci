<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveScoreController extends Controller
{
    public function index()
    {
        $APIkey='741c433286d8d53054cc472a1d3b49f2b05f085fc045d2979e004f5f689fe2b9';

        $from = '2024-02-01';
        $to = '2023-02-05';
        $league_id = 152;

        $curl_options = array(
        CURLOPT_URL => "https://apiv3.apifootball.com/?action=get_events&from=$from&to=$to&league_id=$league_id&APIkey=$APIkey",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER => false,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_CONNECTTIMEOUT => 5
        );

        $curl = curl_init();
        curl_setopt_array( $curl, $curl_options );
        $result = curl_exec( $curl );

        $result = (array) json_decode($result);

        dd($result);
    }
}
