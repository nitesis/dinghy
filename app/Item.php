<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

	//
    protected $fillable = ['id' ,'name'];

	public function particip()
	{
		return $this->belongsTo('App\Particip');
	}

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
