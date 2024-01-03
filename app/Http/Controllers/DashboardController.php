<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\ContactUs;
use App\Models\DeviceBrand;
use App\Models\DeviceModel;
use App\Models\DeviceIssueCategory;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\OrderStatusHistory;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data = [];
        $data['total_user'] = User::count();
        $data['total_city'] = City::count();
        $data['total_order'] = Order::count();
        $data['total_device_brand'] = DeviceBrand::count();
        $data['total_device_model'] = DeviceModel::count();
        $data['total_contact_us'] = ContactUs::count();
        $data['total_device_issue_category'] = DeviceIssueCategory::count();
		return view('dashboard')->with($data);
	}
}
