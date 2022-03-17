<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Group extends Model
{
    protected $fillable=[
    	'title',
    ];
    protected $table = 'groups';
    //public $timestamps = false;
        public function users(){
    	return $this->hasMany(User::class);  // akta group er akadhik user thakte pare
    }

}
