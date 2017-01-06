<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    protected $table = "menu_view";
	
	public function ParentMenu()
	{
		return $this->hasMany('App\MenuMaster','id',"parent_id");
	}
	
	public function FirstChildMenu()
	{
		return $this->hasMany('App\MenuChild',"id","child_id");
	}
	
	public function SecondChildMenu()
	{
		return $this->hasMany('App\MenuChild',"id","child2_id");
	}
}
