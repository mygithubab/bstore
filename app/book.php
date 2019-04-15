<?php

namespace App;


class Book extends Model
{
    public function shelf() {
        return $this->belongsTo(Shelf::class);
    }
}
