<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $table = "courses";

  protected $fillable = [
    'user_id','main_category_id', 'parent_sub_category_id', 'child_sub_category_id', 'title', 'description', 'actual_price', 'sell_price','image','actual_price_in_usd','sell_price_in_usd','currency'
  ];
  
  public function User(){
    return $this->belongsTo(User::class);
  }

  public function mainCategory() {
    return $this->belongsTo(MainCategory::class);
  }

  public function parentSubCategory() {
    return $this->belongsTo(ParentSubCategory::class);
  }

  public function childSubCategory() {
    return $this->belongsTo(ChildSubCategory::class);
  }

}
