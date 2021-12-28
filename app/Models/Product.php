<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

      #One To Many (Inverse) / BelongsTo
      public function category()
      {
          return $this->belongsTo(Category::class);
  
      }

      public function review()
      {
          return $this->hasMany(Review::class);
  
      }

      public function shopcart()
      {
          return $this->hasMany(Shopcart::class);
  
      }

      public function orderitem()
    {
        return $this->belongsTo(Order::class);
        
    }
}
