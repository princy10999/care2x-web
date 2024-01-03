<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use DataTables;


class OrderController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $city = Order::orderBy('id', 'ASC')->get();
            return Datatables::of($city)
                ->addIndexColumn()
                ->addColumn('city_name', function ($row) {
                    return $row->name;
                })
                ->addColumn('created_at', function ($row) {
                    return $row->created_at;
                })

                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn .= '<a href="' . url('city/edit/' . $row->id)  . '">
                    <div class="btn-group align-top">
                        <button class="btn btn-outline-primary">Edit</button>
                    </div>
                </a>';
                    $btn .= ' <div class="btn-group align-top" style="margin-left: 5px;">
                <button class="btn btn-outline-danger deleteUser" data-href="' . url('city/delete/' . $row->id) . '" data-toggle="modal" data-target="#deleteUser1" data-id="' . $row->id . '"
                type="button" >Delete</button>
                </div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make('true');
        }
        return view('module.order.index');
    }   
    public function create()
    {
        return view('module.order.create');
    }
}
