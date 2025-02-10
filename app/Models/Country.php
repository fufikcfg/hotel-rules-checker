<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    use HasFactory;

    protected $table = 'cities';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'country_id',
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
