<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Album extends Model
{
    protected $fillable = ['name', 'release_date', 'singer_id'];

    public function singer(): BelongsTo
    {
        return $this->belongsTo(Singer::class);
    }

    public function songs(): BelongsToMany
    {
        return $this->belongsToMany(Song::class, 'album_songs')->withPivot('track_number');
    }
}
