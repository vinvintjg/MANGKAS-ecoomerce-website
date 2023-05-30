<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function getCreateServicePage(){
        $services = Service::all();
        return view('create-service', ['services' => $services]);
    }

    public function createService(Request $request)
    {
        $extension1 = $request->file('service_logo')->getClientOriginalExtension();
        $fileName1 = $request->service_name . '_photo.' . $extension1; //rename
        $request->file('service_logo')->storeAs('public/image/', $fileName1); //save

        Service::create([
            'service_name' => $request->service_name,
            'service_logo' => $fileName1,
            'shop_id' => Auth::user()->id,
        ]);

        return redirect(route('getServices'));
    }

    public function getServices(){
        $user_id = Auth::user()->id;
        $services = Service::where('shop_id', $user_id)->get();
        return view('create-service', ['services' => $services]);
    }

    public function deleteService($id){
        Service::destroy($id);
        return redirect(route('getServices'));
    }
}
