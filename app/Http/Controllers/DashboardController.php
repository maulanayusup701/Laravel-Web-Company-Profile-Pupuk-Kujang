<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('back-end/dashboard/dashboard', [
            'title' => 'Dashboard',
            'messages' => Message::where('status_message_id', '!=', 4)->latest()->take(3)->get(),
            'count_msg' => Message::count(),
            'count_msg_read' => Message::where('status_message_id', 2)->count(),
            'count_msg_progress' => Message::where('status_message_id', 3)->count(),
            'count_msg_fix' => Message::where('status_message_id', 4)->count(),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('toastr-success', 'Logout Success');
    }
}
