<?php

namespace App\Actions\Rules;

use App\Tasks\Rules\ConditionsMatchTask;
use App\Tasks\Rules\GetHotelsTask;
use App\Tasks\Rules\GetRuleTask;

class CheckHotelRulesAction
{
    public function __construct(
        private readonly GetHotelsTask $getHotelsTask,
        private readonly GetRuleTask $getRuleTask,
        private readonly ConditionsMatchTask $matchTask
    ) {}

    public function run(int $hotelId): array
    {
        $hotel = $this->getHotelsTask->run($hotelId);
        $rules = $this->getRuleTask->run();

        $notifications = [];

        foreach ($rules as $rule) {
            $conditions = json_decode($rule->conditions, true);

            if ($this->matchTask->run($conditions, $hotel)) {
                $notifications[] = [
                    'agency_name' => $rule->agency->name,
                    'manager_text' => $rule->manager_text
                ];
            }
        }

        return $notifications;
    }
}
