<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
		'amount',
		'order_number'
	];

	public function products()
	{
		return $this->belongsToMany('App\Product');
	}
}
