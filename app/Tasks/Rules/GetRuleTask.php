<?php

namespace App\Tasks\Rules;

use App\Models\Rule;
use Illuminate\Database\Eloquent\Collection;

class GetRuleTask
{
    public function run(): Collection
    {
        return Rule::where('is_active', true)->with('agency')->get();
    }
}
