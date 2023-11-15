<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allMessages()
    {
        return view('back-end.dashboard.messages.all-messages', [
            'title' => 'All Messages',
            'messages' => Message::latest()->paginate(10)
        ]);
    }
    public function processMessages()
    {
        return view('back-end.dashboard.messages.process-messages', [
            'title' => 'Process Messages',
            'messages' => Message::latest()->where('status_message_id', 3)->paginate(10)
        ]);
    }
    public function fixedMessages()
    {
        return view('back-end.dashboard.messages.fixed-messages', [
            'title' => 'Fixed Messages',
            'messages' => Message::latest()->where('status_message_id', 4)->paginate(10)
        ]);
    }
    public function show(Message $message)
    {
        if($message->status_message_id == 1){
            $message->update([
                'status_message_id' => 2
            ]);
        }
        
        return view('back-end.dashboard.messages.show-message', [
            'title' => 'Show Message',
            'message' => $message
        ]);
    }
    public function process(Message $message)
    {
        $message->update([
            'status_message_id' => 3
        ]);

        return redirect()->route('process-messages')->with('message', 'Complaint message is being processed');
    }
    public function fix(Message $message)
    {
        $message->update([
            'status_message_id' => 4
        ]);
        return redirect()->route('fixed-messages')->with('message', 'The complaint message has been addressed');
    }
}   