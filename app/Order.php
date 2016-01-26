<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
		'amount'
	];

	public function products()
	{
		return $this->belongsToMany('App\Product');
	}
}
