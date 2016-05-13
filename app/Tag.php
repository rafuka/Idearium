<?php

namespace Idearium;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  public function notes() {
    return $this->belongsToMany('\Idearium\Note')->withTimestamps();
  }
}
