<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use App\Models\Carousell;
use App\Models\Information;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front-end.landingpage', [
            'title' => 'Pupuk Kujang',
            'carousell' => Carousell::all(),
            'info' => Information::all(),
            'contact' => Contact::all()
        ]);
    }

    public function storeOnlineSupport(Request $request)
    {
        $data = $request->validate([
            'fullname' => 'required|min:3|max:25',
            'email' => 'required|email:dns|',
            'subject' => 'required|min:3|max:25',
            'message' => 'required|min:3'
        ]);
        $data['short_message'] = Str::limit(strip_tags($request->message), 150);

        Message::create($data);
        return redirect('/')->with('success', 'Sendding');
    }
}