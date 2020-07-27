<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'name', 'description', 'level', 'category', 'technology', 'salary', 'slug',
    ];
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
