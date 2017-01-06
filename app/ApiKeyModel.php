<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiKeyModel extends Model
{
    protected $table	= "api_key";
	
	protected $hidden = [
        'key', 'token',
    ];
	
	
}
