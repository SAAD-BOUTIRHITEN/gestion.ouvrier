<?php

namespace App\Http\Controllers;

use App\Models\Pate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pa = Pate::all();
        $s = $pa->where('user', Auth::user()->name);
        return view('pate.pate', compact('s'));
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

        $so = Pate::create([
            'produit' => $request->product_name,
            'Quantité' => $request->Quentiter,
            'Valeur' => $request->Valeur,
            'user' => Auth::user()->name,


        ]);
        session()->flash('Add', 'Add Succeful');
        return redirect('pate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pate  $pate
     * @return \Illuminate\Http\Response
     */
    public function show(Pate $pate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pate  $pate
     * @return \Illuminate\Http\Response
     */
    public function edit(Pate $pate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pate  $pate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pate $pate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pate  $pate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pate $pate)
    {
        //
    }
}