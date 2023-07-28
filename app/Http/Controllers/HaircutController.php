<?php

namespace App\Http\Controllers;
use App\Models\Haircut;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HaircutController extends Controller
{
    public function getCreateHaircutPage(){
        $haircuts = Haircut::all();
        return view('create-haircut', ['haircuts' => $haircuts]);
    }

    public function createHaircut(Request $request)
    {
        $extension1 = $request->file('haircut_logo')->getClientOriginalExtension();
        $fileName1 = $request->haircut_name . '_photo.' . $extension1; //rename
        $request->file('haircut_logo')->storeAs('public/image/', $fileName1); //save

        Haircut::create([
            'haircut_name' => $request->haircut_name,
            'haircut_logo' => $fileName1,
            'shop_id' => Auth::user()->id,
        ]);

        return redirect(route('getHaircuts'));
    }

    public function getHaircuts(){
        $user_id = Auth::user()->id;
        // $haircuts = Haircut::all();
        $haircuts = Haircut::where('shop_id', $user_id)->get();
        return view('create-haircut', ['haircuts' => $haircuts]);
    }

    public function deleteHaircut($id){
        Haircut::destroy($id);
        return redirect(route('getHaircuts'));
    }
}
