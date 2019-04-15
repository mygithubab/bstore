<?php

namespace App;


class Shelf extends Model
{
    public function books() {
      return $this->hasMany(Book::class);
    }
}
