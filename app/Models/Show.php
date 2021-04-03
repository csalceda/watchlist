<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'description', 'status_id', 'genre_id', 'image'
    ];

    public function getStatus()
    {
        // Relationship (table, local key, foreign_key)
        return $this->hasOne(Status::class, 'id', 'status_id');
    }

    public function getGenre()
    {
        return $this->hasOne(Genre::class, 'id', 'genre_id');
    }

}
