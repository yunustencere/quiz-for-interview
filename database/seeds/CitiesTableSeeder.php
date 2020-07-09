<?php

use Illuminate\Database\Seeder;
use \App\City;

class CitiesTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			DB::table('cities')->delete();
			$cities = [
				[ 'name' => 'Konya' , 'id' => '306569'],
				[ 'name' => 'Ankara' , 'id' => '323784'],
				[ 'name' => 'İstanbul' , 'id' => '745042'],
				[ 'name' => 'Kocaeli' , 'id' => '742865'],
				[ 'name' => 'Manisa' , 'id' => '304825']
			];
			foreach ($cities as $city)
			{
			 	City::create(
					$city
				);
			}
		}
}
