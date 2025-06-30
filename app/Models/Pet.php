<?php

namespace App\Models;

use App\Traits\Uuids;
use App\Models\Shelter;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory,Uuids,SoftDeletes,HasSlug;

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
        'name',
        'slug',
        'species',
        'breed',
        'age',
        'gender',
        'description',
        'status',
        'image',
        'shelter_id',
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
     * Get the shelter that owns the pet.
     */
    public function shelter()
    {
        return $this->belongsTo(Shelter::class);
    }

    /**
     * Get the adoption applications for the pet.
     */
    public function adoptionApplications()
    {
        return $this->hasMany(AdoptionApplication::class);
    }
}
