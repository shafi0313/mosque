<?php

namespace App\Http\Controllers\Admin;

use App\Models\Committee;
use Illuminate\Support\Str;
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
        if ($request->ajax()) {
            $committees = Committee::query();
            return DataTables::of($committees)
                ->addIndexColumn()
                ->addColumn('joining_date', function ($row) {
                    return bdDate($row->joining_date);
                })
                ->addColumn('type', function ($row) {
                    return str_replace("_", " ", $row->type);
                })
                ->addColumn('text', function ($row) {
                    return Str::limit($row->text, 50);
                })
                ->addColumn('is_present', function ($row) {
                    return $row->is_present == 1 ? 'Present Member' : 'Past Member';
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
                ->rawColumns(['joining_date','type','is_present','image', 'status', 'action'])
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
        $request->has('status') ? $data['status'] = 1 : $data['status'] = 0;
        $request->has('is_present') ? $data['is_present'] = 1 : $data['is_present'] = 0;
        if ($request->hasFile('image')) {
            $data['image'] = imageStore($request, 'image', 'image', 'images/committee/');
        }

        try {
            Committee::create($data);
            DB::commit();
            return response()->json(['message' => 'The information has been inserted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again.'], 500);
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
    public function edit(Request $request, Committee $committee_member)
    {
        if ($request->ajax()) {
            $modal = view('dashboard.committee_member.edit')->with(['committee_member' => $committee_member])->render();
            return response()->json(['modal' => $modal], 200);
        }
        return abort(500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommitteeRequest $request, Committee $committee_member)
    {
        $data = $request->validated();
        $image = $committee_member->image;
        if ($request->hasFile('image')) {
            $data['image'] = imageUpdate($request, 'image', 'user', 'uploads/images/committee/', $image);
        }
        try {
            $committee_member->update($data);
            return response()->json(['message' => 'The information has been updated'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Committee $committee_member)
    {
        try {
            $checkPath =  public_path('images/committee/' . $committee_member->image);
            if (file_exists($checkPath)) {
                unlink($checkPath);
            }
            $committee_member->delete();
            return response()->json(['message' => 'The information has been deleted'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Oops something went wrong, Please try again'], 500);
        }
    }
}
