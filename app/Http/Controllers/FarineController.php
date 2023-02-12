<?php

namespace App\Http\Controllers;

use App\Models\Farine;
use App\Models\User;
use App\Notifications\CreatSaad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class FarineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farin = Farine::all();
        // $ff = Farine::get('valeur')->sum('valeur');
        $s = $farin->where('user', Auth::user()->name);
        return view('farin.farine', compact('s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(Auth::user()->id);
        foreach ($user->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
        return redirect()->back();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => ['required', 'max:255'],
            'Quentiter' => ['required'],
        ]);

        $so = Farine::create([
            'produit' => $request->product_name,
            'Quantité' => $request->Quentiter,
            'Valeur' => $request->Valeur,
            'user' => Auth::user()->name,


        ]);
        $users = User::where('id', '!=', Auth::user()->id)->get();
        Notification::send($users, new CreatSaad($so->produit,  $so->user));
        session()->flash('Add', 'Add Succeful');
        return redirect('farine');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Farine  $farine
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farine  $farine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Farine  $farine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        /* $find = $request->pro_id;
        $fin = Farine::find($find);
        $fin->update([
            'produit' => $request->Product_name,
            'Quantité' => $request->qr,
            'Valeur' => $request->vr,

        ]);
        return redirect('farine');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Farine  $farine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farine $farine)
    {
        //
    }
}