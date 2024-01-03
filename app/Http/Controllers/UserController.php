<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;
class UserController extends Controller
{
  
	public function __construct()
	{
	    $this->middleware('auth');
	}

	
	public function index(Request $request)
	{
		// if ($request->ajax()) {
		// 	$data = User::orderBy('id', 'ASC')->get();
        // 	return Datatables::of($data)
        //     ->addIndexColumn()
        //     ->addColumn('name', function ($row) {
        //         return $row->name;
        //     })
        //     ->addColumn('email', function ($row) {
        //         return $row->email;
        //     })
        //     ->addColumn('phone', function ($row) {
        //         return $row->phone;
        //     })
        //     ->addColumn('message', function ($row) {
        //         return $row->message;
        //     })
        //     ->rawColumns(['name', 'message'])
        //     ->make('true');
		// }
		return view('module.user.index');
			
	}

}
