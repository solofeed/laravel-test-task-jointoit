<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'email',
        'logo',
        'website',
    ];

    protected $casts = [
        'name'    => 'string',
        'email'   => 'string',
        'logo'    => 'string',
        'website' => 'string',
    ];
}
