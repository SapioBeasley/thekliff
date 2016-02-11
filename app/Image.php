<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'images_url',
	];

	/**
	* Get the Products for the property.
	*/
	public function products()
	{
		return $this->belongsToMany('App\Product');
	}
}
