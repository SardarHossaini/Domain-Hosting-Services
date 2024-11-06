<?php

namespace App\Http\Controllers;
use App\Models\hosting;
use Illuminate\Http\Request;

class hostingController extends Controller
{
    public function index()
    {

    }

    // Show the form for creating a new post
    public function create()
    {
        return view('addHost');
    }

    // Store a newly created post in storage
    public function store(Request $request)
    {
        // Validation rules
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s]*$/', // Only letters and spaces allowed
            ],
            'label' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s]*$/' // Alphanumeric and spaces allowed
            ],
            'web_space' => 'required|integer|min:1', // Must be a positive integer (e.g., in MB or GB)
            'bandwidth' => 'required|integer|min:0',
            'sub_domain' => 'required|integer|min:0',
            'email_id' => 'required|integer|min:0', // Must be an integer (>= 0)
            'price' => 'required|numeric|min:0', // Price must be a non-negative float
            'hosting_amount' => 'required|integer|min:1', // Must be at least 1 hosting package available
        ]);

        // Handle validated data (e.g., saving to the database)
        $host = new Hosting(); // Updated to use the correct model class name
        $host->name = $request->name;
        $host->label = $request->label;
        $host->web_space = $request->web_space;
        $host->bandwidth = $request->bandwidth;
        $host->sub_domain = $request->sub_domain;
        $host->email_id = $request->email_id;
        $host->price = $request->price;
        $host->hosting_amount = $request->hosting_amount;
        $host->save();

        return redirect()->route('host.show'); // Make sure this route exists
    }

    // Display the specified post
    public function show()
    {
        $hosts = hosting::all();
        return view('Hosts', ['hosts' => $hosts]);

    }

    // Show the form for editing the specified post
    public function edit($id)
    {
        $host = hosting::find($id);
        return view('editHost', ['host' => $host]);

    }

    public function showHosting()
    {
        $hosts = hosting::all();
        return view('hosting', ['hosts' => $hosts]);
    }

    // Remove the specified post from storage
    public function destroy($id)
    {
        $host = hosting::findOrFail($id);
        $host->delete();
        return redirect()->back();
    }
}
