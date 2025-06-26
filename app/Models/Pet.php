<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    /** @use HasFactory<\Database\Factories\PetFactory> */
   use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'breed',
        'gender',
        'age',
        'description',
        'photo_url',
        'available',
        'shelter_id',
    ];

    protected $casts = [
        'available' => 'boolean',
        'gender' => 'string', // Enum cast as string
    ];

    // Relationships
    public function shelter()
    {
        return $this->belongsTo(User::class, 'shelter_id');
    }

    public function adoptionApplications()
    {
        return $this->hasMany(AdoptionApplication::class, 'pet_id');
    }

    public function photos()
    {
        return $this->hasMany(PetPhoto::class, 'pet_id');
    }
}
