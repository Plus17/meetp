<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
  use Sluggable;

  protected $table = 'categories';

  protected $fillable = ['name', 'description', 'slug'];

  public function events() {
      return $this->hasMany('App\Event');
  }

  public function sluggable()
  {
      return [
	  'slug' => [
	      'source' => 'name'
	  ]
      ];
  }

}
