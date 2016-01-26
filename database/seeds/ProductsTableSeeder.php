<?php

use Illuminate\Database\Seeder;
use Sapioweb\CrudHelper\CrudyController as CrudHelper;
use App\Product;

class ProductsTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		$productMake = [
			'12',
			'11',
			'10',
			'9',
			'8',
			'7',
			'6',
			'5',
			'4',
			'3',
			'2',
			'1',
		];

		foreach ($productMake as $go) {

			$product = CrudHelper::store(new App\Product,  [
				'name' => 'Test Product ' . str_random(20),
				'price' => rand(2, 14) * 5.9,
			]);
		}
	}
}
