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
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in leo quis neque cursus laoreet. Vestibulum sed placerat dolor. Donec sem purus, pulvinar quis felis eu, pharetra pharetra turpis. Praesent blandit, mauris nec euismod vulputate, nisl ex egestas purus, sed iaculis sem ipsum sed sem. Etiam ultrices lacus eu ante fringilla viverra. Cras ac pellentesque ipsum, et vulputate nulla. Duis consequat, tortor non pulvinar mollis, est orci eleifend ex, in rutrum risus augue nec enim. Donec dapibus mauris sit amet diam laoreet vehicula.',
			]);

			$product = CrudHelper::show(new App\Product, 'id', $product['id'])->first();

			$category = [
				rand(1, 10),
				rand(1, 10),
				rand(1, 10)
			];

			$images = [
				rand(1, 10),
				rand(1, 10),
				rand(1, 10),
				rand(1, 10),
				rand(1, 10)
			];

			$product->categories()->sync($category);
			$product->images()->sync($images);
		}
	}
}
