<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Nicolaslopezj\Searchable\SearchableTrait;

class PastPaper extends Model
{
    use Searchable;
    use SearchableTrait;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'past_papers.name' => 10,
            'past_papers.file' => 5,
            'past_papers.slug' => 2,

        ],

    ];
    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function searchableAs()
    {
        return 'year';
    }
}
