<?php

namespace App;


class Shelf extends Model
{
    protected $guarded = [];
    public function books() {
      return $this->hasMany(Book::class);
    }
}
