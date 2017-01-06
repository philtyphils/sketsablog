<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";
	
	public function PostToComment()
	{
		return $this->hasMany('App\Comment',"post_id");
	}
}
