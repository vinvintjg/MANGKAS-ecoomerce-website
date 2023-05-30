<?php

namespace App\Http\Controllers;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FacilityController extends Controller
{

    public function getCreateFacilityPage(){
        $facilities = Facility::all();
        return view('create-facility', ['facilities' => $facilities]);
    }

    public function createFacility(Request $request)
    {
        $extension1 = $request->file('facility_logo')->getClientOriginalExtension();
        $fileName1 = $request->facility_name . '_photo.' . $extension1; //rename
        $request->file('facility_logo')->storeAs('public/image/', $fileName1); //save

        Facility::create([
            'facility_name' => $request->facility_name,
            'facility_logo' => $fileName1,
            'shop_id' => Auth::user()->id,
        ]);

        return redirect(route('getFacilities'));
    }

    public function getFacilities(){
        $user_id = Auth::user()->id;
        $facilities = Facility::where('shop_id', $user_id)->get();
        return view('create-facility', ['facilities' => $facilities]);
    }

    public function deleteFacility($id){
        Facility::destroy($id);
        return redirect(route('getFacilities'));
    }
}
