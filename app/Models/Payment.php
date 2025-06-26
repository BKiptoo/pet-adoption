<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'application_id',
        'amount',
        'transaction_id',
        'status',
        'phone_number',
        'paid_at',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'paid_at' => 'datetime',
        'status' => 'string', // Enum cast as string
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function adoptionApplication()
    {
        return $this->belongsTo(AdoptionApplication::class, 'application_id');
    }
}
