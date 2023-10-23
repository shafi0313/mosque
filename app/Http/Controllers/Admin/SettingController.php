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
        $data = $request->validate([
            'app_name'             => 'required|string|max:80',
            'app_description'      => 'required',
            'app_keyword'          => 'required',
            'home_committee_title' => 'required',
            'footer_credit'        => 'required',
            'footer_credit_link'   => 'nullable|url',
            'facebook'             => 'nullable|url',
            'youtube'              => 'nullable|url',
            'app_logo'             => 'nullable|image|mimes:png|max:300',
            'app_nav_logo'         => 'nullable|image|mimes:png|max:80',
            'prayer_time_location' => 'nullable',
            'phone'                => 'nullable',
            'address'              => 'nullable|string',
            'email'                => 'nullable|email',
        ]);

        if ($request->prayer_time && $request->prayer_time == 'custom') {
            $data['custom_prayer_time'] = 1;
            $data['auto_prayer_time']   = '';
        } else {
            $data['custom_prayer_time'] = '';
            $data['auto_prayer_time']   = 1;
        }
        Setting($data)->save();

        $app_logo = setting('app_logo');
        if ($request->hasFile('app_logo')) {
            Setting(['app_logo' => imageUpdate($request, 'app_logo', 'app_logo', 'images/logo', $app_logo)])->save();
        }
        $app_nav_logo = setting('app_nav_logo');
        if ($request->hasFile('app_nav_logo')) {
            Setting(['app_nav_logo' => imageUpdate($request, 'app_nav_logo', 'app_nav_logo', 'images/logo', $app_nav_logo)])->save();
        }

        Alert::success('Success', 'Setting Updated Successfully');
        return back();
    }
}
