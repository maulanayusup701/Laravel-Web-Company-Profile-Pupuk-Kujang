<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back-end.dashboard.information.information', [
            'title' => 'Information',
            'info' => Information::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Information $iNformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Information $information)
    {
        return view('back-end.dashboard.information.edit-information', [
            'title' => 'Edit Information',
            'info' => $information
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Information $information)
    {
        {
            $data = $request->validate([
                'about' => 'required|min:3|',
                'visi_misi' => 'required|min:3|',
                'email' => 'required|email',
                'no_telp' => 'required|min:3|max:15',
                'running_hour' => 'required|min:3',
                'address' => 'required|min:10',
            ]);
    
            Information::where('id', $information->id)->update($data);
            return redirect('/dashboard/information')->with('success', 'information has been updated!');
        }
    }
}
