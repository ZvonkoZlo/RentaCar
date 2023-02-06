<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Reservation;


class ReservationController extends Controller
{

public function index(){
    $email = Auth::user()->email;
    $rezervacije = Reservation::where('email', $email)->get();

return view('reservations', compact('rezervacije'));
    // $rezervacija = Reservation::all();
    // return view('cart.index', compact('rezervacije'));
}


public function show()
{
    if (auth::user()->isAdmin() or auth::user()->isSuperAdmin()){
    $rezervacije = Reservation::all();
}
    else{
    $rezervacije = Reservation::where('email', Auth::user()->email)->get();
}

return view('reservation.index', compact('rezervacije'));

    // $rezervacije = Reservation::all();
    // return view('reservation.index', compact('rezervacije'));
}
public function potvrdi($id){
    $status = Reservation::find($id);
    $status->status=1;
    $status->save();
    return to_route('reservation');

}
public function odbij($id){
    $status = Reservation::find($id);
    $status->status=2;
    $status->save();
    return to_route('reservation');

}





 public function store(Request $request){

    //$reservation=Reservation::all();

    Reservation::create([
       'first_name' => $request->name,
       'last_name' => $request->lastname,
       'email' => auth::user()->email,
      'tel_number' => $request->tel,
       'res_date' => $request-> res_date,
     'city' => $request->city,
    ]);
    
    
    $rezervacije = Reservation::all();
    return to_route('reservation');
    
}


}
