<?php

namespace App\Http\Controllers\Hotel;

use App\Actions\Hotels\GetHotelsAction;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class GetHotelsController extends Controller
{
    public function __construct(
        private readonly GetHotelsAction $getHotelsAction
    ){}

    public function __invoke(): View
    {
        return view('hotels.index', [
            'hotels' => $this->getHotelsAction->run()
        ]);
    }
}
