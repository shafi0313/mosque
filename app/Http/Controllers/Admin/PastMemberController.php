<?php

namespace App\Http\Controllers\Admin;

use App\Models\Committee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class PastMemberController extends Controller
{
    public function index(Request $request)
    {
        // return$committees = Committee::query()->get();
        if ($request->ajax()) {
            $past_members = Committee::whereStatus(0);
            return DataTables::of($past_members)
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
        return view('dashboard.past-member.index');
    }
}
