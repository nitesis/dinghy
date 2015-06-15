<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model {

	//
	public function user()
    {
        
        return $this->belongsTo('App\User');
    }


    public function particip()
    {
    	return $this->hasMany('App\Particip');
    }

    public function isHost()
    {
    	return $this->hasMany('App\Events');
    }
}
