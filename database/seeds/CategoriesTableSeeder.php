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
				'mens tops',
				'womens tops',
				'womens sets',
				'womens denim',
				'mens denim',
				'womens bottoms',
				'womens sweaters',
				'mens sweaters',
				'womens jackets',
				'mens jackets',
				'womens dresses',
				'womens jump suits',
				'mens pants',
				'mens shorts',
				'new arivals mens',
				'accessories mens',
				'accessories women',
				'new arivals women',
				'sales women',
				'sales mens',
			];

			foreach ($topLevelCategories as $topLevelCategory) {
				$category = CrudHelper::store(new App\Category, [
					'category' => $topLevelCategory,
					'is_sub_cat' => 0
				]);
			}

			foreach ($subCategories as $subCategory) {
				$category = CrudHelper::store(new App\Category, [
					'category' => $subCategory,
					'is_sub_cat' => 1
				]);
			}
		}
	}
