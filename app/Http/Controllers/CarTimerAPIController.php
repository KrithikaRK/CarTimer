<?php

namespace App\Http\Controllers;

use App\Helper\CarTimerHelper;

class CarTimerAPIController extends Controller
{
    public function getCarTimer($min)
    {
        $result = CarTimerHelper::carTimer($min);
        return response()->json($result);
    }
}
