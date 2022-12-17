<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table = 'posts';

    public $fillable = [
        'author_id',
        'category_id',
        'title',
        'seo_title',
        'excerpt',
        'body',
        'image',
        'slug',
        'meta_description',
        'meta_keywords',
        'status',
        'featured'
    ];

    protected $casts = [
        'title' => 'string',
        'seo_title' => 'string',
        'excerpt' => 'string',
        'body' => 'string',
        'image' => 'string',
        'slug' => 'string',
        'meta_description' => 'string',
        'meta_keywords' => 'string',
        'status' => 'string',
        'featured' => 'boolean'
    ];

    public static $rules = [
        'author_id' => 'required',
        'category_id' => 'nullable',
        'title' => 'required|string',
        'seo_title' => 'nullable|string',
        'excerpt' => 'nullable|string',
        'body' => 'required|string',
        'image' => 'nullable|string',
        'slug' => 'required|string',
        'meta_description' => 'nullable|string',
        'meta_keywords' => 'nullable|string',
        'status' => 'required|string',
        'featured' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
