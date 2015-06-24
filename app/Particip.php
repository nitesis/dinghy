<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Particip extends Model {

	//

    protected $fillable = ['id', 'name'];

	public function guest()
	{
		return $this->belongsTo('App\Guest');
	}

	public function event()
	{
		return $this->belongsTo('App\Event');
	}

	public function item()
	{
		return $this->hasMany('App\Item');
	}
}
