<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

    protected $fillable = ['id' ,'name', 'place', 'description', 'date'];
	//
	public function particip()
	{
		return $this->hasMany('App\Particip');
	}

    /**
     * An Event has a Host
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
	public function hasHost()
	{
		return $this->belongsTo('App\Guest');
	}

    /**
     * Get the categories associated with the given event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
	public function categories()
	{
		return $this->belongsToMany('App\Category', 'categories_events')->withTimestamps();
	}

    /*public function images()
    {

    }*/



}
