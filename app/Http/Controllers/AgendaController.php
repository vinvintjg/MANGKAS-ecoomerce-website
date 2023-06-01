<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use App\Models\Hairstylist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function getCreateAgendaPage(){
        $agendas = Agenda::all();
        $hairstylists = Hairstylist::all();
        return view('create-agenda', ['agendas' => $agendas, 'hairstylists' => $hairstylists]);
    }

    public function createAgenda(Request $request){

        Agenda::create([
            'hairstylist_id' => $request->hairstylist_id,
            'date' => $request->date,
            'hour' => $request->hour,
            'status'=> $request->status,
            'shop_id' => Auth::user()->id,
        ]);

        return redirect(route('getAgendas'));
    }

    public function getAgendas(){
        $user_id = Auth::user()->id;
        $agendas = Agenda::where('shop_id', $user_id)->get();
        $hairstylists = Hairstylist::where('shop_id', $user_id)->get();
        return view('create-agenda', ['agendas' => $agendas, 'hairstylists' => $hairstylists]);
    }

    public function deleteAgenda($id){
        Agenda::destroy($id);

        return redirect(route('getAgendas'));
    }

    public function index(Request $request)
    {
        $query = Agenda::query();

        if ($request->has('filter_date')) {
            $filterDate = $request->input('filter_date');
            $query->whereDate('date', $filterDate);
        }

        $agendas = $query->get();

        return view('agendas.index', compact('agendas'));
    }




}
