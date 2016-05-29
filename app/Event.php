<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  protected $table = 'events';

  protected $fillable = ['name', 'place', 'description', 'category_id', 'user_id'];

  public function category()
  {
      return $this->belongsTo('App\Category');
  }

  public function user()
  {
        return $this->belongsTo('App\User');
  }

}
