<?php

use Illuminate\Database\Seeder;
use Sapioweb\CrudHelper\CrudyController as CrudHelper;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;

        do {

        	$image = [
        	   'image_url' => 'https://source.unsplash.com/featured/783x1008?nature=' . rand(1,99),
                'is_main' => rand(0,1)
        	];

        	$image = CrudHelper::store(new App\Image, $image);
	$i++;

        } while ($i <= 50);
    }
}
