<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function index()
    {
        $message = Message::where("recepient_id", auth()->user()->id)->get();
        return view("pages.message.index", compact("message"));
    }

    function destroy(Message $message)
    {
        try {
            $message->delete();
            return redirect()->back();
        } catch (\Exception $exception){
            return redirect()->back();
        }
    }
}
