<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Settings::all();
        return view('pages.settings')->with('settings', $settings[0] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'gpt_key' => 'required',
            'elevenlabs_key' => 'required',
            'gpt_append_message' => 'required',

        ]);

        $setting =  Settings::find(1);
        $setting->gpt_key = $request->input('gpt_key');
        $setting->elevenlabs_key = $request->input('elevenlabs_key');
        $setting->gpt_append_message = $request->input('gpt_append_message');
        $setting->save();
        return redirect('/settings')->with('success', 'Settings updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
