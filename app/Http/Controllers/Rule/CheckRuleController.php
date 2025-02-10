<?php

namespace App\Http\Controllers\Rule;

use App\Actions\Rules\CheckHotelRulesAction;
use Illuminate\Http\JsonResponse;

class CheckRuleController
{
    public function __construct(
        private readonly CheckHotelRulesAction $checkHotelRulesAction
    ){}

    public function __invoke(int $hotelId): JsonResponse
    {
        return response()->json(
            $this->checkHotelRulesAction->run($hotelId)
        );
    }
}
