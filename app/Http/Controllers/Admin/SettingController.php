<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.setting.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'app_name'           => 'required|string|max:80',
            'app_description'    => 'required',
            'app_keyword'        => 'required',
            'footer_credit'      => 'required',
            'footer_credit_link' => 'required|url',
            'facebook'           => 'nullable|url',
            'youtube'            => 'nullable|url',
            'app_logo'           => 'nullable|image','mimes:png|max:300',
            'app_nav_logo'       => 'nullable|image','mimes:png|max:80',
        ]);
        Setting(['app_name' => $request->app_name])->save();
        Setting(['app_description' => $request->app_description])->save();
        Setting(['app_keyword' => $request->app_keyword])->save();
        Setting(['footer_credit' => $request->footer_credit])->save();
        Setting(['footer_credit_link' => $request->footer_credit_link])->save();
        Setting(['facebook' => $request->facebook])->save();
        Setting(['youtube' => $request->youtube])->save();
        
        $app_logo = setting('app_logo');
        if ($request->hasFile('app_logo')) {
            $data['app_logo'] = imageUpdate($request, 'app_logo', 'app_logo', 'images/logo', $app_logo);
            Setting(['app_logo' => $request->app_logo])->save();
        }
        $app_nav_logo = setting('app_nav_logo');
        if ($request->hasFile('app_nav_logo')) {
            $data['app_nav_logo'] = imageUpdate($request, 'app_nav_logo', 'app_nav_logo', 'images/logo', $app_nav_logo);
            Setting(['app_nav_logo' => $request->app_nav_logo])->save();
        }

        Alert::success('Success', 'Setting Updated Successfully');
        return back();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
