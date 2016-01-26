<?php

use Illuminate\Database\Seeder;
use Sapioweb\CrudHelper\CrudyController as CrudHelper;
use App\Order;

class OrdersTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		$orderMake = [
			'5',
			'4',
			'3',
			'2',
			'1',
		];

		foreach ($orderMake as $go) {
			$order = CrudHelper::store(new App\Order,  [
				'amount' => rand(2, 14) * 5.9,
			]);
		}
	}
}
