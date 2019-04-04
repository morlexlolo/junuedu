<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{

    public function papers()
    {
        return $this->hasMany('App\PastPaper');
    }

}
