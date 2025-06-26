<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetPhoto extends Model
{
    /** @use HasFactory<\Database\Factories\PetPhotoFactory> */
     use HasFactory;

    protected $fillable = [
        'pet_id',
        'photo_url',
    ];

    // Relationships
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
