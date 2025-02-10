<?php

namespace App\Actions\Hotels;

use App\Tasks\Hotels\GetHotelsTask;

class GetHotelsAction
{
    public function __construct(
        private readonly GetHotelsTask $getHotelsTask
    ){}

    public function run(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->getHotelsTask->run();
    }
}
