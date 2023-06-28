<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;


class AppConfig extends Controller
{
    public function getSettings()
    {
        try {
            $config = Settings::all();

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
    }}
