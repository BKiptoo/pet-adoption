<?php

namespace App\Models;

use App\Traits\Uuids;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shelter extends Model
{
    use HasFactory, Uuids, SoftDeletes, HasSlug;

    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'zip_code',
        'phone',
        'email',
        'description',
        'website',
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
     * Get the pets belonging to the shelter.
     */
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
}
