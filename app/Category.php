<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = "category";
	/**
	 *  @philtyphils
	 *  
	 *  @param [in] $category | Example Param = log-blog
	 *  @return all post in category
	 *  
	 *  @08118779995;philtyphils@gmail.com;
	 */
	public function PostCategory()
	{
		return $this->hasMany('App\Post',"category_id","id");
	}
}
