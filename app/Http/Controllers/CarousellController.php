<?php

namespace App\Http\Controllers;

use App\Models\Carousell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarousellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('back-end.dashboard.carousell.carousell', [
            'title' => 'Carousell',
            'carousells' => Carousell::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousell $carousell)
    {
        return view('back-end.dashboard.carousell.edit-carousell', [
            'title' => 'Edit Carousell',
            'carousell' => $carousell
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousell $carousell)
    {
        $data = $request->validate([
            'text' => 'required',
            'image' => 'image|file|max:1024',
        ]);
        
        $oldImage = [
            'carousell-images/carousell-1.jpg',
            'carousell-images/carousell-2.jpg',
            'carousell-images/carousell-3.jpg',
        ];

        if(!in_array($request->oldImage, $oldImage)) {
            Storage::delete($request->oldImage);
            $data['image'] = $request->file('image')->store('carousell-images');
        }

        Carousell::where('id', $carousell->id)->update($data);
        return redirect('/dashboard/carousell')->with('success', 'carousell has been updated!');
    }
}
