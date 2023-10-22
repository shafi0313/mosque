<?php

namespace App\Http\Controllers\Admin;

use App\Models\PrayerTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UpdatePrayerTimeRequest;

class PrayerTimeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $prayerTimes = PrayerTime::query();
            return DataTables::of($prayerTimes)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn  = '';
                    $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.prayer-times.edit', $row->id), 'row' => $row]);
                    // $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.slider.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('dashboard.prayer-time.index');
    }

    public function edit(Request $request, PrayerTime $prayerTime)
    {
        if ($request->ajax()) {
            $modal = view('dashboard.prayer-time.edit')->with(['prayerTime' => $prayerTime])->render();
            return response()->json(['modal' => $modal], 200);
        }
        return abort(500);
    }

    public function update(UpdatePrayerTimeRequest $request, PrayerTime $prayerTime)
    {
        $data = $request->validated();

        try {
            $prayerTime->update($data);
            return response()->json(['message' => 'Prayer Time Update Successfully'], 200);
        } catch (\Exception $e) {
            // return response()->json(['message' => $e->getMessage()], 500);
            return response()->json(['message' => __('Oops something went wrong, Please try again later.')], 500);
        }
    }
}
