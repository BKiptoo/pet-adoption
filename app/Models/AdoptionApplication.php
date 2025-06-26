<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptionApplication extends Model
{
    /** @use HasFactory<\Database\Factories\AdoptionApplicationFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'pet_id',
        'status',
        'reason',
        'application_note',
    ];

    protected $casts = [
        'status' => 'string', // Enum cast as string
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'application_id');
    }
}
