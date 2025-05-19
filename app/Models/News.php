<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'content',
        'image',
        'author_id',
        'published_at',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
