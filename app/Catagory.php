<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
        public $timestamps = true;
    protected $guarded = ['id'];

    protected $fillable=['title','status','parent_id'];

    // public function catagory(){
    // 	return $this->hasMany('App\Catagory','parent_id');
    // }

     public function catagories(){
    	
    	return $data= $this->belongsTo('App\Catagory','parent_id');
    	 //dd($data);

    }

  public function products()
    {
        $data= $this->belongsToMany(Product::class);
        dd($data);
    }


}
