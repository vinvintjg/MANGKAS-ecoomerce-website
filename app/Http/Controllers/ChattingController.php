<?php

namespace App\Http\Controllers;

use App\Models\Chatting;
use Illuminate\Http\Request;
use App\Http\Requests\ChattingRequest;
use Illuminate\Support\Facades\Auth;
class ChattingController extends Controller
{
    public function getCreateChattingPage(){
        $chattings = Chatting::all();
        return view('components.live-chat', ['chattings' => $chattings]);
    }

    public function getChatPage(){
        $chattings = Chatting::all();
        return view('create-live-chat', ['chattings' => $chattings]);
    }

    public function createChatting(ChattingRequest $request){

        Chatting::create([
            'chatting_text' => $request->chatting_text,
            'sender' => Auth::user()->id,
            'receiver' => $request->receiver,
        ]);
        return back();
    }

    public function getChattings()
    {
        $userId = Auth::user()->id;
        // $chattings = Chatting::all();
        $senderChattings = Chatting::where('sender', $userId)->get();
        $receiverChattings = Chatting::where('receiver', $userId)->get();

        $chattings = $senderChattings->concat($receiverChattings);

        return view('components.live-chat', ['chattings' => $chattings]);
    }

}
