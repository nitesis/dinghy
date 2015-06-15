<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

	//
	public function particip()
	{
		return $this->hasMany('App\Particip');
	}

	public function hasHost()
	{
		return $this->belongsTo('App\Guest');
	}

	public function categories()
	{
		return $this->hasMany('App\Category');
	}

}
