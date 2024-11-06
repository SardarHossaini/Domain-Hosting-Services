<?php

namespace App\Http\Controllers;
use App\Models\domain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DomainController extends Controller
{
    public function checkDomain(Request $request)
    {
        $request->validate([
            'domain' => 'required|string'
        ]);

        $domainName = $request->input('domain');
        $apiKey = 'at_plND87U1c9PiFcTr6j75O4D6PueB1'; // Replace with your actual API key

        // Make request with SSL verification disabled (if necessary)
        $response = Http::withoutVerifying()->get('https://www.whoisxmlapi.com/whoisserver/WhoisService', [
            'apiKey' => $apiKey,
            'domainName' => $domainName,
            'outputFormat' => 'JSON'
        ]);
        $domains = Domain::all();
        $data = $response->json();

        return view('domain', [
            'domainName' => $domainName,
            'data' => $data,
            'domains' => $domains,

        ]);
    }




    public function index()
    {
        // Retrieve all domains
        $domains = Domain::all();

        // Return the index view with the domains data
        return view('domains.index', compact('domains'));
    }

    public function create()
    {
        return view('domains.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s]*$/', // Ensures the name contains only letters and spaces
                // Replace 'table_name' with your actual table name
            ],
            'year' => 'required|integer',
            'rawNew' => 'required|numeric',
            'transfer' => 'required|numeric',
            'register' => 'required|numeric',
        ]);


        // Extract only the fields that are fillable
        $data = $request->only(['name', 'year', 'rawNew', 'transfer', 'register']);

        // Create the domain
        Domain::create($data);

        return redirect()->route('domains.index')
            ->with('success', 'Domain created successfully.');
    }

    public function edit($id)
    {
        // Find the domain by its ID
        $domain = Domain::findOrFail($id);

        // Return the edit view with the domain data
        return view('domains.edit', compact('domain'));
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-zA-Z\s]*$/', // Ensures the name contains only letters and spaces
                'unique:table_name,name', // Replace 'table_name' with your actual table name
            ],
            'year' => 'required|integer',
            'rawNew' => 'required|numeric',
            'transfer' => 'required|numeric',
            'register' => 'required|numeric',
        ], [
            'name.regex' => 'The name may only contain letters and spaces.',
        ]);
        $domain = Domain::findOrFail($id);
        $domain->update($request->all());

        return redirect()->route('domains.index')
            ->with('success', 'Domain updated successfully.');
    }

    public function destroy($id)
    {
        $domain = Domain::findOrFail($id);
        $domain->delete();

        return redirect()->route('domains.index')
            ->with('success', 'Domain deleted successfully.');
    }

    public function searchDomain()
    {
        $domains = domain::all();
        return view('domain', ['domains' => $domains]);
    }

}
