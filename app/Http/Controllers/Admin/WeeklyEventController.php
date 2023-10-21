<?php

namespace App\Http\Controllers\Admin;

use App\Models\WeeklyEvent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreWeeklyEventRequest;
use App\Http\Requests\UpdateWeeklyEventRequest;

class WeeklyEventController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $weeklyEvents = WeeklyEvent::query();
            return DataTables::of($weeklyEvents)
                ->addIndexColumn()
                ->addColumn('content', function ($row) {
                    return Str::limit($row->content, 100);
                })
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->diffForHumans();
                })
                ->addColumn('image', function ($row) {
                    return html()->img()->src(imagePath('weekly-event', $row->image))->style('width:70px');
                })
                ->addColumn('status', function ($row) {
                    return view('button', ['type' => 'status', 'route' => route('admin.weekly_events.status', $row->id), 'row' => $row]);
                })
                ->addColumn('action', function ($row) {
                    $btn  = '';
                    $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.weekly-events.edit', $row->id), 'row' => $row]);
                    $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.weekly-events.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    return $btn;
                })
                ->rawColumns(['content','image', 'status', 'action', 'created_at'])
                ->make(true);
        }
        return view('dashboard.weekly-event.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWeeklyEventRequest $request)
    {
        DB::beginTransaction();
        $data           = $request->validated();
        $data['status'] = $request->status == 'on' ? 1 : 0;
        if ($request->hasFile('image')) {
            $data['image'] = imageStore($request, 'image', 'image', 'images/weekly-event/');
        }

        try {
            WeeklyEvent::create($data);
            DB::commit();
            return response()->json(['message' => 'weekly Event Created Successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            // return response()->json(['message' => $e->getMessage()], 500);
            return response()->json(['message' => __('Oops something went wrong, Please try again later.')], 500);
        }
    }

    public function status(WeeklyEvent $weeklyEvent)
    {
        $weeklyEvent->is_active = $weeklyEvent->status  == 1 ? 0 : 1;
        try {
            $weeklyEvent->save();
            return response()->json(['message' => 'The status has been updated'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, WeeklyEvent $weeklyEvent)
    {
        if ($request->ajax()) {
            $modal = view('dashboard.weekly-event.edit')->with(['weeklyEvent' => $weeklyEvent])->render();
            return response()->json(['modal' => $modal], 200);
        }
        return abort(500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWeeklyEventRequest $request, WeeklyEvent $weeklyEvent)
    {
        DB::beginTransaction();
        $data = $request->validated();

        $image = $weeklyEvent->image;
        if ($request->hasFile('image')) {
            $data['image'] = imageUpdate($request, 'image', 'weekly-event', 'images/weekly-event', $image);
        }

        try {
            $weeklyEvent->update($data);
            DB::commit();
            return response()->json(['message' => 'Weekly Event Update Successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            // return response()->json(['message' => $e->getMessage()], 500);
            return response()->json(['message' => __('Oops something went wrong, Please try again later.')], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WeeklyEvent $weeklyEvent)
    {
        try {
            $checkPath =  public_path('uploads/images/weekly-event/' . $weeklyEvent->image);
            if (file_exists($checkPath)) {
                unlink($checkPath);
            }
            $weeklyEvent->delete();
            return response()->json(['message' => __('app.success-message')], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => __('app.oops')], 500);
        }
    }
}
