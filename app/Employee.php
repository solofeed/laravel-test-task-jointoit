<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
    ];

    protected $casts = [
        'first_name' => 'string',
        'last_name'  => 'string',
        'email'      => 'string',
        'phone'      => 'string',
    ];
}
