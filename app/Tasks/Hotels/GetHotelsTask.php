<?php

namespace App\Tasks\Hotels;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Collection;

class GetHotelsTask
{
    public function run(): Collection
    {
        return Hotel::all();
    }
}
