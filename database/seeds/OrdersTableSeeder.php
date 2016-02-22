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
			[
				'amount' => rand(2, 14) * 5.9,
				'order_number' => str_random(25)
			],
			[
				'amount' => rand(2, 14) * 5.9,
				'order_number' => str_random(25)
			],
			[
				'amount' => rand(2, 14) * 5.9,
				'order_number' => str_random(25)
			],
			[
				'amount' => rand(2, 14) * 5.9,
				'order_number' => str_random(25)
			],
			[
				'amount' => rand(2, 14) * 5.9,
				'order_number' => str_random(25)
			],
			[
				'amount' => rand(2, 14) * 5.9,
				'order_number' => str_random(25)
			],
			[
				'amount' => rand(2, 14) * 5.9,
				'order_number' => str_random(25)
			],
			[
				'amount' => rand(2, 14) * 5.9,
				'order_number' => str_random(25)
			],
		];

		foreach ($orderMake as $order) {
			$order = CrudHelper::store(new App\Order,  $order);

			$order = CrudHelper::show(new App\Order, 'id', $order['id'])->first();

			$order->products()->sync(['1','2','3']);
		}
	}
}
