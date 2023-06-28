<?php

namespace App\Http\Controllers\Api;

use App\Models\AppConfigApi;
use App\Http\Controllers\Controller;

class AppConfigController extends Controller
{

    public function getSettings()
    {
        try {
            $config = AppConfigApi::all();

            return response()->json([
                "success" => true,
                "message" => 'Settings retrieved successfully',
                "data" => $config,

            ]);
        } catch (\Throwable $error) {
            return response()->json([
                'status' => false,
                'message' => $error->getMessage()
            ], 500);
        }
    }
}
