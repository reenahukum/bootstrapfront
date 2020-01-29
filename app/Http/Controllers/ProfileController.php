<?php

namespace App\Http\Controllers;
use App\Profile;
use App\Exports\ProfileExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::all();

        return view('profiles.index', compact('profiles'));
        
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'nationality' => 'required',
            'dateofbirth' => 'required',
            'education' => 'required',
            'contact' => 'required'

        ]);

        Profile::create($request->all());

        return redirect()->route('profiles.index')
                        ->with('success', 'Profiles created successfully');
    }

    public function export()
    {
        return Excel::download(new ProfileExport, 'profile.xlsx');
    }
}
