<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function success($message = "Success", $data = null)
    {
        return \response()->json([
            'status' => true,
            'code' => 200,
            'message' => $message,
            'data' => $data
        ], 200);
    }

    protected function error($code = 500, $message = "Something went wrong", $data = null)
    {
        return \response()->json([
            'status' => false,
            'code' => $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
