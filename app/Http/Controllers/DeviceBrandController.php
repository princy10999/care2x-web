<?php

namespace App\Http\Controllers;

use App\Models\DeviceBrand;
use DataTables;
use Illuminate\Http\Request;

class DeviceBrandController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $brand = DeviceBrand::orderBy('id', 'ASC')->get();
            return Datatables::of($brand)
                ->addIndexColumn()
                ->addColumn('brand_name', function ($row) {
                    return $row->name;
                })
                ->addColumn('created_at', function ($row) {
                    return $row->created_at;
                })

                ->addColumn('action', function ($row) {
                    $btn = '';
                    $btn .= '<a href="' . url('brand/edit/' . $row->id)  . '">
                    <div class="btn-group align-top">
                        <button class="btn btn-outline-primary">Edit</button>
                    </div>
                </a>';
                    $btn .= ' <div class="btn-group align-top" style="margin-left: 5px;">
                <button class="btn btn-outline-danger deleteUser" data-href="' . url('brand/delete/' . $row->id) . '" data-toggle="modal" data-target="#deleteUser1" data-id="' . $row->id . '"
                type="button" >Delete</button>
                </div>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make('true');
        }
        return view('module.brand.index');
    }
    public function create()
    {
        return view('module.brand.create');
    }
    public function store(Request $request)
    {
        $brand = new DeviceBrand();
        $brand->name = $request->brand;
        $brand->save();
        return redirect('/brand');
    }
    public function edit($id)
    {
        $data['id'] = DeviceBrand::where('id',$id)->first();
        return view('module.brand.create')->with($data);
    }
    public function update(Request $request)
    {
        $brand = array();
        $brand['name'] = $request->brand;
        DeviceBrand::where('id',$request->brand_id)->update($brand);
        return redirect('/brand');
    }
}
