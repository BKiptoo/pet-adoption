<?php

namespace App\Models;

use App\Traits\Uuids;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdoptionApplication extends Model
{
    use HasFactory, SoftDeletes, Uuids, HasSlug;

          /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'pet_id',
        'slug',
        'status',
        'applicant_name',
        'applicant_email',
        'applicant_phone',
        'address',
        'reason',
        'submitted_at',
    ];

            /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }


    /**
     * Get the user who submitted the application.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the pet associated with the application.
     */
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

}
