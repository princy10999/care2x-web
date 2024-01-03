<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use DataTables;

class CityController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $city = City::orderBy('id', 'ASC')->get();
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
        return view('module.city.index');
      
    }
    public function create(Request $request)
    {
        return view('module.city.create');
        
    }
    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->city;
        $city->save();
        return redirect('/city'); 
    }
    public function edit($id)
    {
        $data['id'] = City::where('id', $id)->first();
        // dd($id);
        return view('module.city.create')->with($data);
    }
    public function update(Request $request)
    {
        $city = array();
        $city['name'] = $request->city;
        City::where('id',$request->city_id)->update($city);
        return redirect('/city'); 
    }
}
