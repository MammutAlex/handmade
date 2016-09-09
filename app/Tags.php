<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = [
        'class',
        'title'
    ];

    public function portfolio()
    {
        return $this->hasMany('App\Portfolio', 'tag_id');
    }
}
