<?php

namespace Idearium;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function user() {
      return $this->belongsTo('\Idearium\User');
    }

    protected $fillable = [
        'user_id', 'text'
    ];

    public function tags() {
      return $this->belongsToMany('\Idearium\Tag')->withTimestamps();
    }
}
