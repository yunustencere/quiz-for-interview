<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Weather;

class Q4Controller extends Controller
{
	public function index()
	{
		/*$to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 3:30:34');
		$from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 9:30:34');
		$diff_in_hours = $to->diffInHours($from);
		print_r($diff_in_hours);// Output: 6*/
		//KONYA 306569

		$cities = array(
			"306569"=>"Konya",
			"323784"=>"Ankara",
			"745042"=>"İstanbul",
			"742865"=>"Kocaeli",
			"304825"=>"Manisa"
		);
		$i = 0;
		foreach ($cities as $key => $value) {
			/*
			$rUrl = 'http://api.openweathermap.org/data/2.5/weather?id=' .$key. '&appid=31c50d29bc82a7d2ef202b4919ee5460';
			$json = json_decode(file_get_contents($rUrl), true);

			$weather = $json["weather"][0]["description"];
    	$temp = $json["main"]["temp"] -273.15;

    	*/
    	$cityResults[$i]["id"] = $key;
    	$cityResults[$i]["name"] = $value;
    	/*
    	$cityResults[$i]["weather"] = $weather;
    	$cityResults[$i]["temp"] = $temp;
    	*/
    	$i++;

		}
    

		return view('q4',compact('cityResults'));
	}

	public function getWeatherInfo($id)
	{
		$rUrl = 'http://api.openweathermap.org/data/2.5/weather?id=' .$id. '&appid=31c50d29bc82a7d2ef202b4919ee5460';
		$json = json_decode(file_get_contents($rUrl), true);

		$res['description'] = $json["weather"][0]["description"];
    $res['temperature'] = round($json["main"]["temp"] -273.15);    
		$res['icon'] = $json["weather"][0]["icon"];

		return response()->json($res);
	}
}
