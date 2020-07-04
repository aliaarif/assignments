<?php

use Illuminate\Database\Seeder;
use App\Country;
use App\State;
use App\City;
use App\Locality;

class LocalitiesTableSeeder extends Seeder
{
	public function run()
	{
		
		for($i = 1; $i <= 100; $i++)
		{
			$city = City::whereIn('id', [706, 707, 2707, 2726, 2727, 5583, 1126, 2763, 4776, 5022, 4460, 3659, 4933, 3378, 3683, 5236, 4759, 1750, 1119])->inRandomOrder()->first();
			
			$locality = new Locality;
			$locality->city_id = $city->id;
			$locality->name = 'Sector '.$i;
			$locality->seo = mt_rand(0, 1);
			$locality->save();
		}

	}
}
