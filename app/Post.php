<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public $timestamps = false;

	public function category() {
		return $this->belongsTo('App\Category');
	}

	public function posts() {
		return $this->hasMany('App\Post');
	}
}