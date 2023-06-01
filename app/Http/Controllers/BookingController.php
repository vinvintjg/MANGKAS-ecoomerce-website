<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Agenda;
use App\Models\Facility;
use App\Models\Haircut;
use App\Models\Hairstylist;
use App\Models\Service;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
        public function getCreateBookingPage(){
        $bookings = Booking::all();
        return view('create-booking', ['bookings' => $bookings]);
    }

    public function createBooking(Request $request){

        Booking::create([
            'agenda_id' => $request->agenda_id,
            'user_id' => $request->user_id,
            'hairstylist_id' => $request->hairstylist_id,
            'shop_id'=> $request->shop_id,
            'booking_name' => $request->booking_name,
            'booking_phone' => $request->booking_phone,
            'booking_gender' => $request->booking_gender,
            'booking_haircut' => $request->booking_haircut,
            'booking_note' => $request->booking_note,
            'booking_payment_total' => $request->booking_payment_total,
            'booking_payment_method' => $request->booking_payment_method,
            'booking_payment_photo' => $request->booking_payment_photo,
            'booking_membership' => $request->booking_membership,
        ]);

        return redirect(route('getBookings'));
    }

    public function getBookings(){
        $bookings = Booking::all();
        $agendas = Agenda::all();
        $hairstylists = Hairstylist::all();
        $users = User::all();
        $shops = Shop::all();

        return view('create-booking',
        ['bookings' => $bookings,
        'agendas' => $agendas,
        'hairstylists' => $hairstylists,
        'users' => $users,
        'shops' => $shops]);
    }

    public function getBookingById($id) {

        $shops = Shop::find($id);
        $shopId = $shops->shop_id;

        $services = Service::where('shop_id', $shopId)->get();
        $hairstylists = Hairstylist::where('shop_id', $shopId)->get();
        $haircuts = Haircut::where('shop_id', $shopId)->get();
        $facilities = Facility::where('shop_id', $shopId)->get();
        $agendas = Agenda::where('shop_id', $shopId)->get();
        $bookings = Booking::where('shop_id', $shopId)->get();

        return view('user-booking', [
            'shops' => $shops,
            'services' => $services,
            'hairstylists' => $hairstylists,
            'haircuts' => $haircuts,
            'bookings' => $bookings,
            'agendas' => $agendas,
            'facilities' => $facilities]);
    }

    public function deleteBooking($id){

        Booking::destroy($id);

        return redirect(route('getBookings'));
    }
}
