<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = [
    'title',
    'content',
    'slug',
    'user_id',
    'category_id'
  ];
  function comments() {
    return $this->morphMany('App\Comment', 'commendable');
  }
}