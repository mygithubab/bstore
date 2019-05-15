<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function scopeSearch($query , $s){
        return $query -> where('title' , 'like' , '%' .$s.'%')
            -> orWhere ('author' , 'like' , '%' .$s.'%')
            -> orWhere ('isbn' , 'like' , '%' .$s.'%')
            -> orWhere ('gener' , 'like' , '%' .$s.'%')
            -> orWhere ('publisher' , 'like' , '%' .$s.'%');
    }
}
