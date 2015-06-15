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

    public function images()
    {
        return this->image = http://loremflickr.com/320/240/summer;
    }


    /*protected $fillable = ['name', 'place', 'description', 'date'];*/
}
