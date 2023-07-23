<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use App\Models\Facility;
use App\Models\Haircut;
use App\Models\Hairstylist;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    //

    public function getCreateShopPage(){
        $shops = Shop::all();
        return view('create-shop', ['shops' => $shops]);
    }

    public function getCreateShop(){
        $shops = Shop::all();
        $services = Service::all();
        return view('user-shop', ['shops' => $shops, 'services' => $services]);
    }

    public function createShop(Request $request)
    {
        $fileName2 = null;
        $fileName3 = null;
        $fileName4 = null;

        if ($request->hasFile('shop_photo_1')) {
            $extension1 = $request->file('shop_photo_1')->getClientOriginalExtension();
            $fileName1 = $request->shop_name . '_photo_1.' . $extension1; //rename
            $request->file('shop_photo_1')->storeAs('public/image/', $fileName1); //save
        }

        if ($request->hasFile('shop_photo_2')) {
        $extension2 = $request->file('shop_photo_2')->getClientOriginalExtension();
        $fileName2 = $request->shop_name . '_photo_2.' . $extension2; //rename
        $request->file('shop_photo_2')->storeAs('public/image/', $fileName2); //save
        }

        if ($request->hasFile('shop_photo_3')) {
        $extension3 = $request->file('shop_photo_3')->getClientOriginalExtension();
        $fileName3 = $request->shop_name . '_photo_3.' . $extension3; //rename
        $request->file('shop_photo_3')->storeAs('public/image/', $fileName3); //save
        }

        if ($request->hasFile('shop_photo_4')) {
        $extension4 = $request->file('shop_photo_4')->getClientOriginalExtension();
        $fileName4 = $request->shop_name . '_photo_4.' . $extension4; //rename
        $request->file('shop_photo_4')->storeAs('public/image/', $fileName4); //save
        }

        Shop::create([
            'shop_name' => $request->shop_name,
            'shop_photo_1' => $fileName1,
            'shop_photo_2' => $fileName2,
            'shop_photo_3' => $fileName3,
            'shop_photo_4' => $fileName4,
            'shop_price_low' => $request->shop_price_low,
            'shop_price_high' => $request->shop_price_high,
            'shop_rate' => $request->shop_rate,
            'shop_location' => $request->shop_location,
            'shop_description' => $request->shop_description,
            'shop_address' => $request->shop_address,
            'shopid' => Auth::user()->id,
        ]);

        return redirect(route('getShops'));
    }

    public function getShops(){
        $user_id = Auth::user()->id;
        // $shops = Shop::where('shop_id', $user_id)->get(); this
        $shops = Shop::where('shopid', $user_id)->get();
        return view('create-shop', ['shops' => $shops]);
    }

    public function deleteShop($id){

        Shop::destroy($id);

        return redirect(route('getShops'));
    }

    public function getShopById($id) {

        $shops = Shop::find($id);
        $shopId = $shops->shopid;

        $services = Service::where('shop_id', $shopId)->get();
        $hairstylists = Hairstylist::where('shop_id', $shopId)->get();
        $haircuts = Haircut::where('shop_id', $shopId)->get();
        $facilities = Facility::where('shop_id', $shopId)->get();

        return view('user-shop-detail', [
            'shops' => $shops,
            'services' => $services,
            'hairstylists' => $hairstylists,
            'haircuts' => $haircuts,
            'facilities' => $facilities]);
    }
}
