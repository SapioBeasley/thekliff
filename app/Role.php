<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = [
		'role'
	];

	/**
	* Get the Categories for the property.
	*/
	public function users()
	{
		return $this->belongsToMany('App\User');
	}
}
