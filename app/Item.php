<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $fillable=['codeno', 'name', 'photo', 'price', 'discount', 'description', 'brand_id','subcategory_id'];

  public function brand()
  {
    return $this->belongsTo('App\Brand');
  }

  public function subcategory()
  {
    return $this->belongsTo('App\Subcategory');
  }

  public function orders($value='')
  {
    return $this->belongsToMany('App\Order','orderdetail')
                ->withPivot('qty')
                ->withTimestamps();         
  }
}
