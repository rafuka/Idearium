<?php

namespace Idearium;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function user() {
      return $this->belongsTo('\Idearium\User');
    }
}
