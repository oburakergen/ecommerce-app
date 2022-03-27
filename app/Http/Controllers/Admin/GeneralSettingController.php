<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\GeneralRequest;
use App\Models\Setting\Setting;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View
    {
        $general = Setting::firstOrCreate(
            [   'name' => 'general.settings'],
            [
                'settings' => '{"siteText":"asd","slogan":"asd","email":"asd","register":"","selectedWeekly":"1"}'
            ]);

        return view('admin.pages.setting.general.index',["general" => json_decode($general->settings)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Setting\GeneralRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(GeneralRequest $request)
    {
        $validated = $request->validated();

        Setting::updateOrCreate(
            [   'name' => 'general.settings'],
            ["settings" =>  json_encode($validated)]
        );

        return redirect()->back()->withErrors(['msg' => 'forms.successMsg']);
    }
}
