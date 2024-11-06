<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\hosting;
use Auth;
use Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class orderController extends Controller
{
    public function index()
    {
        $orders = order::all();
        return view('orders.recent', ['orders' => $orders]);
    }
    public function check()
    {
        return view('salse');
    }
    // Show the form for creating a new post
    public function create()
    {

    }

    // Store a newly created post in storage
    public function store(Request $request)
    {
        $order = new order();
        $order->user_id = Auth::id();
        $order->date = today();
        $order->name = $request->name;
        $order->price = 12;
        $order->status = 'paid';
        $order->save();
        return redirect()->back();
    }

    // Display the specified post
    public function show()
    {
        $hosts = hosting::all();
        $orders = Order::all();
        return view('Order', compact('orders', 'hosts'));

    }

    // Show the form for editing the specified post
    public function edit()
    {

    }

    // Update the specified post in storage
    public function update(Request $request)
    {

    }

    // Remove the specified post from storage
    public function destroy()
    {

    }
}
