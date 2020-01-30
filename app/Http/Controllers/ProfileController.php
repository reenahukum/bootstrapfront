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

        return view('Profiles.index', compact('profiles'));
        
    }

    public function create()
    {
        return view('Profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5|max:25',
            'gender' => 'required',
            'phone' => 'required|min:10|max:10',
            'email' => 'required|email',
            'address' => 'required',
            'nationality' => 'required',
            'dateofbirth' => 'required',
            'education' => 'required',
            'contact' => 'required'

        ]);

        $data = request()->all();

        $profile = new Profile();

        $profile->name = $data['name'];
        $profile->gender = $data['gender'];
        $profile->phone = $data['phone'];
        $profile->email = $data['email'];
        $profile->address = $data['address'];
        $profile->nationality = $data['nationality'];
        $profile->dateofbirth = $data['dateofbirth'];
        $profile->education = $data['education'];
        $profile->contact = $data['contact'];

        $profile->save();   





        return redirect()->route('Profiles.index')
                        ->with('success', 'Profiles created successfully');
    }

    public function export()
    {
        return Excel::download(new ProfileExport, 'profile.xlsx');
    }
}
