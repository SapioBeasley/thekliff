<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
		'category'
	];

    	/**
	* Get the Categories for the property.
	*/
	public function products()
	{
		return $this->belongsToMany('App\Product');
	}
}
