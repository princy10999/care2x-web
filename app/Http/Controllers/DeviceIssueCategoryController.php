<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceIssueCategoryController extends Controller
{
    public function index()
    {
        return view('module.device_issue_category.index');
    }
}
