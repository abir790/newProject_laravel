<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;

class Product extends Model
{
    protected $fillable=[
    	'category_id','title','description','cost_price','price',
    ];
    public function category(){
        return $this->belongsTo(category::class);

    }
}
