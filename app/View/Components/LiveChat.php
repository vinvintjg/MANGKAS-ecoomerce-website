<?php

namespace App\View\Components;

use App\Models\Chatting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LiveChat extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $senderChattings = Chatting::where('sender', $userId)->get();
            $receiverChattings = Chatting::where('receiver', $userId)->get();
            $chattings = $senderChattings->concat($receiverChattings);
        } else {
            // Jika pengguna belum login, Anda bisa menentukan nilai default untuk $chattings atau
            // memutuskan bagaimana Anda ingin menangani kasus ini.
            $chattings = collect(); // Contoh, nilai default berupa collection kosong.
        }
        
        return view('components.live-chat', ['chattings' => $chattings]);
    }
}
