<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function get(Request $request)
    {
        $state = rand(1, 2);
        if ($state % 2) {
            return $this->error();
        } else {
            return $this->success();
        }
    }
}
