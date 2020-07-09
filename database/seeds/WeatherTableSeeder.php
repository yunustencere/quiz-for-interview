<?php

use Illuminate\Database\Seeder;
use \App\Weather;

class WeatherTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('weather')->delete();
			$weathers = [
				[ 'name' => 'Konya' , 'id' => '306569'],
				[ 'name' => 'Ankara' , 'id' => '323784'],
				[ 'name' => 'İstanbul' , 'id' => '745042'],
				[ 'name' => 'Kocaeli' , 'id' => '742865'],
				[ 'name' => 'Manisa' , 'id' => '304825']
			];
			foreach ($weathers as $weather)
			{
			 	Weather::create(
					$weather
				);
			}
		}
}
