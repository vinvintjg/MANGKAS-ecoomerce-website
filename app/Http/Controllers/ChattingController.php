<?php

namespace App\Http\Controllers;

use App\Models\Chatting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ChattingController extends Controller
{
    public function getCreateChattingPage(){
        $chattings = Chatting::all();
        return view('mangkas-chatting', ['chattings' => $chattings]);
    }

    public function createChatting(Request $request){

        Chatting::create([
            'chatting_text' => $request->chatting_text,
            'sender' => Auth::user()->id,
            'receiver' => $request->receiver,
        ]);

        return redirect(route('getChattings'));
    }

    public function getChattings()
    {
        $userId = Auth::user()->id;

        $senderChattings = Chatting::where('sender', $userId)->get();
        $receiverChattings = Chatting::where('receiver', $userId)->get();

        $chattings = $senderChattings->concat($receiverChattings);

        return view('mangkas-chatting', ['chattings' => $chattings]);
    }

}
