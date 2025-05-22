<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use InteractsWithMedia;
    protected $guarded = ['id'];

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
