<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
   protected $fillable = [
   'name','price','stt','description','image','view','category_id','qty'
   ];
   public $timestamps = false;
   public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }
   public function images()
    {
    	return $this->hasMany('App\Models\Image');
    }
    public function comments()
    {
      return $this->hasMany('App\Models\Comment');
    }
    public function orderdetails()
    {
        return $this->hasMany('App\Models\Orderdetail');
    }
}