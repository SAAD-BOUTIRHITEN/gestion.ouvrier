<?php

namespace App\Http\Controllers;

use App\Models\Cous;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $co = Cous::all();
        $s = $co->where('user', Auth::user()->name);
        return view('couscous.cou', compact('s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $so = Cous::create([
            'produit' => $request->product_name,
            'Quantité' => $request->Quentiter,
            'Valeur' => $request->Valeur,
            'user' => Auth::user()->name,


        ]);
        session()->flash('Add', 'Add Succeful');
        return redirect('co');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cous  $cous
     * @return \Illuminate\Http\Response
     */
    public function show(Cous $cous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cous  $cous
     * @return \Illuminate\Http\Response
     */
    public function edit(Cous $cous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cous  $cous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cous $cous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cous  $cous
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cous $cous)
    {
        //
    }
}