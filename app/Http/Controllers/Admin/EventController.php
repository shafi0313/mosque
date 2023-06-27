<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEventRequest;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $events = Event::query();
            return DataTables::of($events)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->diffForHumans();
                })
                ->addColumn('image', function ($row) {
                    $path = asset('uploads/images/events/' . $row->image);
                    return html()->img()->src($path)->style('width:70px');
                })
                ->addColumn('status', function ($row) {
                    return view('button', ['type' => 'status', 'route' => route('admin.event.status', $row->id), 'row' => $row]);
                })
                ->addColumn('action', function ($row) {
                    $btn  = '';
                    $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.event.edit', $row->id), 'row' => $row]);
                    $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.event.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    return $btn;
                })
                ->rawColumns(['image','text','status','action','created_at'])
                ->make(true);
        }
        return view('dashboard.event.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        DB::beginTransaction();
        $data = $request->validated();
        if($request->hasFile('image')){
            $data['image'] = imageStore($request, 'image', 'image', 'images/events/');
        }

        try {
            Event::create($data);
            DB::commit();
            return response()->json(['message' => 'Event Created Successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 500);
            return response()->json(['message' => 'Oops something went wrong, Please try again later.'], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Event $event)
    {
        if ($request->ajax()) {
            $modal = view('dashboard.event.edit')->with(['event' => $event])->render();
            return response()->json(['modal' => $modal], 200);
        }
        return abort(500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        DB::beginTransaction();
        $data = $request->validated();
        $data['status'] = $request->has('status') ? 1 : 0;
        $image = $event->image;
        if ($request->hasFile('image')) {
            $data['image'] = imageUpdate($request, 'image', 'event', 'images/events', $image);
        }

        try {
            $event->update($data);
            DB::commit();
            return response()->json(['message' => 'Event Update Successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            // return response()->json(['message' => $e->getMessage()], 500);
            return response()->json(['message' => 'Oops something went wrong, Please try again later.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {        
        try {
            $checkPath =  public_path('uploads/images/events/' . $event->image);
            if (file_exists($checkPath)) {
                unlink($checkPath);
            }
            $event->delete();
            return response()->json(['message' => 'Event Delete Successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again later.'], 500);
        }
    }
}
