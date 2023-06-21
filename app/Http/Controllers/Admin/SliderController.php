<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
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
                    $src = asset('uploads/images/sliders/' . $row->image);
                    return '<img src="' . $src . '" width="100px">';
                })
                ->addColumn('icon', function ($row) {
                    $src = asset('uploads/images/sliders/' . $row->image);
                    return '<img src="' . $src . '" width="100px">';
                })
                ->addColumn('status', function ($row) {
                    return $row->status == 1 ? 'Published' : 'Unpublished';
                })
                ->addColumn('action', function ($row) {
                    $btn  = '';
                    $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.slider.edit', $row->id), 'row' => $row]);
                    $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.slider.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    return $btn;
                })
                ->rawColumns(['image','icon','action','created_at'])
                ->make(true);
        }
        return view('dashboard.slider.index');
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
    public function store(StoreSliderRequest $request)
    {
        $data = $request->validated();
        try {
            Slider::create($data);  
            return response()->json(['message' => 'Slider Created Successfully'], 200);
        } catch (\Exception $e) {
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
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
