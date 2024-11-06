<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function show()
    {
        $orders = order::all();
        return view('admin', ['orders' => $orders]);

    }

    public function adminDashboard()
    {
        return view('adminDashboard');
    }
}
