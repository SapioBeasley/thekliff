	<?php

	use Illuminate\Database\Seeder;
	use Sapioweb\CrudHelper\CrudyController as CrudHelper;

	class CategoriesTableSeeder extends Seeder
	{
		/**
		* Run the database seeds.
		*
		* @return void
		*/
		public function run()
		{
			$topLevelCategories = [
				'men',
				'women',
				'new arrivals',
				'accessories',
				'sales',
			];

			$subCategories = [
				'tops',
				'sets',
				'denim',
				'bottoms',
				'sweaters',
				'jackets',
				'dresses',
				'jump suits',
				'pants',
				'shorts',
			];

			foreach ($topLevelCategories as $topLevelCategory) {
				$category = CrudHelper::store(new App\Category, [
					'category' => $topLevelCategory,
					'is_sub_cat' => 1
				]);
			}

			foreach ($subCategories as $subCategory) {
				$category = CrudHelper::store(new App\Category, [
					'category' => $subCategory,
					'is_sub_cat' => 0
				]);
			}
		}
	}
