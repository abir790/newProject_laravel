<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class User extends Model
{
	//protected $table = 'users';
	    protected $fillable=[
    	'group_id','name','email','address','phone',
    ];

    public function group(){
    	return $this->belongsTo(Group::class); // see group model
    }
}
