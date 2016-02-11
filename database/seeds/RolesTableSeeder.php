<?php

use Illuminate\Database\Seeder;
use Sapioweb\CrudHelper\CrudyController as CrudHelper;

class RolesTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		$roles = [
			'admin',
			'customer'
		];

		foreach ($roles as $role) {
			$role = CrudHelper::store(new \App\Role, [
				'role' => $role
			]);
		}
	}
}
