<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SearcheController extends Controller
{
    public function index(Request $request)
    {
        dd(1);
        if ($request->ajax()) {

            $data = User::latest()->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('email'))) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                            return \Str::contains($row['email'], $request->get('email')) ? true : false;
                        });
                    }

                    if (!empty($request->get('search'))) {
                        $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                            if (\Str::contains(\Str::lower($row['email']), \Str::lower($request->get('search')))) {
                                return true;
                            } else if (\Str::contains(\Str::lower($row['name']), \Str::lower($request->get('search')))) {
                                return true;
                            }

                            return false;
                        });
                    }
                })
                ->addColumn('action', function ($row) {

                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('users');
    }
}
