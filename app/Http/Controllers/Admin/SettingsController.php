<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SettingsResource;

class SettingsController extends Controller
{
    public function create()
    {
        $settings = Setting::find(1) ?? new Setting();

        return Inertia::render('Settings/Create', [
            'settings' => new SettingsResource($settings),
        ]);
    }
}
