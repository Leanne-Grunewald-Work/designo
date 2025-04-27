<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignProject extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_path',
        'type', // "web", "app", or "graphic"
        'link',
    ];
}
