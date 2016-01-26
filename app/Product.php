<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'name',
		'price',
		'description'
	];

	/**
	* Get the Categories for the property.
	*/
	public function categories()
	{
		return $this->belongsToMany('App\Category');
	}

	public function orders()
	{
		return $this->belongsToMany('App\Order');
	}
}
