<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function index()
    {
        $message = Message::with("sender")->where("recepient_id", auth()->user()->id)->get();
//        dd($message);
        return view("pages.message.index", compact("message"));
    }

    function destroy($id)
    {
        try {
            $message = Message::find($id);
            $message->delete();
            return redirect()->back();
        } catch (\Exception $exception){
            return redirect()->back();
        }
    }
}
