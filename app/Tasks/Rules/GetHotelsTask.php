<?php

namespace App\Tasks\Rules;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class GetHotelsTask
{
    public function run(int $id): Model|Collection|Builder|array|null
    {
        return Hotel::with(['city.country', 'agencyHotelOptions', 'hotelAgreements'])->findOrFail($id);
    }
}
