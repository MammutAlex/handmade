<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'text',
        'date'
    ];

    public function tag()
    {
        return $this->belongsTo('App\Tags', 'tag_id');
    }
}
