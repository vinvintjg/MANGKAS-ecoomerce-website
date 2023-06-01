<?php

namespace App\Http\Controllers;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    public function getCreateMembershipPage(){
        $memberships = Membership::all();
        return view('user-home', ['memberships' => $memberships]);
    }

    public function createMembership(Request $request)
    {
        Membership::create([
            'membership_name' => $request->membership_name,
            'membership_type' => $request->membership_type,
            'membership_phone' => $request->membership_phone,
            'membership_email' => $request->membership_email,
            'user_id' => Auth::user()->id,
        ]);

        return view('user-home');
    }

    public function getMemberships(){
        $memberships = Membership::all();
        return view('create-membership', ['memberships' => $memberships]);
    }

    public function deleteMembership($id){
        Membership::destroy($id);
        return redirect(route('getMemberships'));
    }
}
