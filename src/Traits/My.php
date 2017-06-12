<?php

namespace Code4mk\Multitrust\Traits;

// use Illuminate\Support\Str;

trait My
{
  public function permissions()
  {
      return $this->belongsToMany(config('multitrust.models.permission'))->withTimestamps();
  }
}
