<?php

namespace App\Http\Controllers;
use App\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::latest()->paginate(5);

        return view('profiles.index', compact('profiles'))
        ->with('i', (request() -> input('page', 1) -1) * 5);
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Profile::create($request->all());

        return redirect()->route('profiles.index')
                        ->with('success', 'Profiles created successfully');
    }
}
