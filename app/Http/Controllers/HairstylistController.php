<?php

namespace App\Http\Controllers;
use App\Models\Hairstylist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HairstylistController extends Controller
{
    public function getCreateHairstylistPage(){
        $hairstylists = Hairstylist::all();
        return view('create-hairstylist', ['hairstylists' => $hairstylists]);
    }

    public function createHairstylist(Request $request)
    {
        $extension1 = $request->file('hairstylist_logo')->getClientOriginalExtension();
        $fileName1 = $request->hairstylist_name . '_photo.' . $extension1; //rename
        $request->file('hairstylist_logo')->storeAs('public/image/', $fileName1); //save

        Hairstylist::create([
            'hairstylist_name' => $request->hairstylist_name,
            'hairstylist_logo' => $fileName1,
            'hairstylist_description' => $request->hairstylist_description,
            'hairstylist_rate' => $request->hairstylist_rate,
            'hairstylist_review' => $request->hairstylist_review,
            'shop_id' => Auth::user()->id,
        ]);

        return redirect(route('getHairstylists'));
    }

    public function getHairstylists(){
        $user_id = Auth::user()->id;
        $hairstylists = Hairstylist::where('shop_id', $user_id)->get();
        return view('create-hairstylist', ['hairstylists' => $hairstylists]);
    }

    public function deleteHairstylist($id){
        hairstylist::destroy($id);
        return redirect(route('getHairstylists'));
    }
}
