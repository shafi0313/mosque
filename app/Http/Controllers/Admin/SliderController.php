<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $sliders = Slider::query();
            return DataTables::of($sliders)
                ->addIndexColumn()
                ->addColumn('created_at', function ($row) {
                    return $row->created_at->diffForHumans();
                })
                ->addColumn('image', function ($row) {
                    $path = asset('uploads/images/sliders/' . $row->image);
                    return html()->img()->src($path)->style('width:70px');
                })
                ->addColumn('icon', function ($row) {
                    $path = asset('uploads/images/sliders/' . $row->icon);
                    return html()->img()->src($path)->style('width:70px');
                })
                ->addColumn('status', function ($row) {
                    return view('button', ['type' => 'status', 'route' => route('admin.slider.status', $row->id), 'row' => $row]);
                })
                ->addColumn('action', function ($row) {
                    $btn  = '';
                    $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.slider.edit', $row->id), 'row' => $row]);
                    $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.slider.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    return $btn;
                })
                ->rawColumns(['image', 'icon', 'status', 'action', 'created_at'])
                ->make(true);
        }
        return view('dashboard.slider.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        DB::beginTransaction();
        $data = $request->validated();
        $data['status'] = $request->status == 'on' ? 1 : 0;
        if ($request->hasFile('image')) {
            $data['image'] = imageStore($request, 'image', 'image', 'images/sliders/');
        }
        if ($request->hasFile('icon')) {
            $data['icon'] = imageStore($request, 'icon', 'icon', 'images/sliders/');
        }

        try {
            Slider::create($data);
            DB::commit();
            return response()->json(['message' => 'Slider Created Successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            // return response()->json(['message' => $e->getMessage()], 500);
            return response()->json(['message' => __('Oops something went wrong, Please try again later.')], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Slider $slider)
    {
        if ($request->ajax()) {
            $modal = view('dashboard.slider.edit')->with(['slider' => $slider])->render();
            return response()->json(['modal' => $modal], 200);
        }
        return abort(500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        DB::beginTransaction();
        $data = $request->validated();

        $image = $slider->image;
        if ($request->hasFile('image')) {
            $data['image'] = imageUpdate($request, 'image', 'slider', 'images/sliders', $image);
        }

        $icon = $slider->icon;
        if ($request->hasFile('icon')) {
            $data['icon'] = imageUpdate($request, 'icon', 'icon', 'images/sliders', $icon);
        }

        try {
            $slider->update($data);
            DB::commit();
            return response()->json(['message' => 'Slider Update Successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            // return response()->json(['message' => $e->getMessage()], 500);
            return response()->json(['message' => __('Oops something went wrong, Please try again later.')], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        try {
            $checkPath =  public_path('uploads/images/sliders/' . $slider->image);
            if (file_exists($checkPath)) {
                unlink($checkPath);
            }
            $slider->delete();
            return response()->json(['message' => __('app.success-message')], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => __('app.oops')], 500);
        }
    }
}
