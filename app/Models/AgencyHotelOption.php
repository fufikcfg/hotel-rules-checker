<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AgencyHotelOption extends Model
{
    use HasFactory;

    protected $table = 'agency_hotel_options';
    public $timestamps = false;

    public function agency(): BelongsTo
    {
        return $this->belongsTo(Agency::class);
    }

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class);
    }
}
