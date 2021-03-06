<?php

use Illuminate\Database\Seeder;
use Sapioweb\CrudHelper\CrudyController as CrudHelper;

class UserTableSeeder extends Seeder
{
      /**
      * Run the database seeds.
      *
      * @return void
      */
      public function run()
      {
            $users = [
                  [
                        'name' => 'Andreas Admin',
                        'email' => 'andreas@sapioweb.com',
                        'password' => bcrypt('2wsxzaq1'),
                        'role' => '1'
                  ],
                   [
                        'name' => 'Andreas Customer',
                        'email' => 'andreas2@sapioweb.com',
                        'password' => bcrypt('2wsxzaq1'),
                        'role' => '2'
                  ],
            ];

            foreach ($users as $user) {

                  $roleId = (string) $user['role'];

                  $user = CrudHelper::store(new App\User, [
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'password' => $user['password'],
                  ]);

                  $user = CrudHelper::show(new \App\User, 'id', $user['id'])->first();

                  $user->roles()->sync([$roleId]);
            }
      }
}
