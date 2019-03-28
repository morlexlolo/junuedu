<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Subject extends Model
{
    use Searchable;
    public function papers()
    {
        return $this->hasMany('App\PastPaper');
    }
    public function searchableAs()
    {
        return 'name';
    }
}
