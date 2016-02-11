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

        	$imageUrl = [
        		'image_url' => 'https://source.unsplash.com/featured/783x1008?nature=' . rand()
        	];

        	$image = CrudHelper::store(new App\Image, $imageUrl);
		$i++;
        } while ($i <= 50);
    }
}
