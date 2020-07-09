<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\City;

class Q4Controller extends Controller
{
	public function index()
	{
		$cities = City::all()->pluck('name','id')->toArray();

		$i = 0;
		foreach ($cities as $key => $value) {
			$cityResults[$i]["id"] = $key;
			$cityResults[$i]["name"] = $value;
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
