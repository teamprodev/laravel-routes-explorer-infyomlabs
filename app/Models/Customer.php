<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $table = 'customers';

    public $fillable = [
        'title',
        'first_name',
        'last_name',
        'phone',
        'city',
        'zip',
        'updated_date',
        'registered_date',
        'removed_date',
        'active',
        'manager',
        'site',
        'image',
        'shift_start',
        'shift_end',
        'description'
    ];

    protected $casts = [
        'title' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'phone' => 'string',
        'city' => 'string',
        'zip' => 'string',
        'updated_date' => 'datetime',
        'registered_date' => 'datetime',
        'removed_date' => 'datetime',
        'active' => 'boolean',
        'description' => 'string'
    ];

    public static $rules = [
        'title' => 'nullable|string',
        'first_name' => 'nullable|string',
        'last_name' => 'nullable|string',
        'phone' => 'nullable|string',
        'city' => 'nullable|string',
        'zip' => 'nullable|string',
        'updated_date' => 'nullable',
        'registered_date' => 'nullable',
        'removed_date' => 'nullable',
        'active' => 'nullable|boolean',
        'manager' => 'nullable',
        'site' => 'nullable',
        'image' => 'nullable',
        'shift_start' => 'nullable',
        'shift_end' => 'nullable',
        'description' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
