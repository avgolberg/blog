<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   public function author(){
       return $this->belongsTo(Author::class);
   }
    public function category(){
        return $this->belongsToMany(Category::class);
    }
}
