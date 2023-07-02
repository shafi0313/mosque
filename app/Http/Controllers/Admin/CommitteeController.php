<?php

namespace App\Http\Controllers\Admin;

use App\Models\Committee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreCommitteeRequest;
use App\Http\Requests\UpdateCommitteeRequest;

class CommitteeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // return$committees = Committee::query()->get();
        if ($request->ajax()) {
            $committees = Committee::query();
            return DataTables::of($committees)
                ->addIndexColumn()
                ->addColumn('joining_date', function ($row) {
                    return bdDate($row->joining_date);
                })
                ->addColumn('image', function ($row) {
                    $path = asset('uploads/images/committee/' . $row->image);
                    return html()->img()->src($path)->style('width:70px');
                })
                ->addColumn('status', function ($row) {
                    return view('button', ['type' => 'status', 'route' => route('admin.committee.status', $row->id), 'row' => $row]);
                })
                ->addColumn('action', function ($row) {
                    $btn  = '';
                    $btn .= view('button', ['type' => 'ajax-edit', 'route' => route('admin.committee-member.edit', $row->id), 'row' => $row]);
                    $btn .= view('button', ['type' => 'ajax-delete', 'route' => route('admin.committee-member.destroy', $row->id), 'row' => $row, 'src' => 'dt']);
                    return $btn;
                })
                ->rawColumns(['image','text','status','action','joining_date'])
                ->make(true);
        }
        return view('dashboard.committee_member.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCommitteeRequest $request)
    {
        DB::beginTransaction();
        $data = $request->validated();
        if($request->hasFile('image')){
            $data['image'] = imageStore($request, 'image', 'image', 'images/committee/');
        }

        try {
            Committee::create($data);
            DB::commit();
            return response()->json(['message' => 'Committee Member Created Successfully'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 500);
            return response()->json(['message' => 'Oops something went wrong, Please try again later.'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Committee $committee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Committee $committee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommitteeRequest $request, Committee $committee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Committee $committee)
    {
        //
    }
}
