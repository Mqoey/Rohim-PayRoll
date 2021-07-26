<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.settings.settings', ['settings' => Setting::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        // Setting::truncate();
        // $data = $setting->all();
        // if (Setting::create($data)) {
        // return redirect('settings')->withMessage('Settings Updated');
        // }
        // return redirect('settings')->withMessage('Error while updating');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $data = new Setting();
        $paye = $request->input('paye');
        $nassa = $request->input('nassa');
        $aids_levy = $request->input('aids_levy');

        DB::update('UPDATE settings SET paye = ?, nassa = ?, aids_levy = ? WHERE `settings`.`id` = 1', [$paye, $nassa, $aids_levy]);

        return view('admin.settings.settings')
            ->with('settings', Setting::all())
            ->with('message', 'Settings updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
