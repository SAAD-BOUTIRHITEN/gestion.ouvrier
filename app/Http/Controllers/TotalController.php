<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Total;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TotalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ss = Client::where('user', Auth::user()->name)->get('cal')->sum('cal');
        $s = Client::where('user', Auth::user()->name)->get('Total')->max('Total');
        $s1 = Client::where('user', Auth::user()->name)->get('Total')->min('Total');
        $c1 = Client::where('Total', '=', $s)->get();
        $c11 = Client::where('Total', '=', $s1)->get();
        return view('total.to', compact('ss', 's', 's1', 'c1', 'c11'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function show(Total $total)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function edit(Total $total)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Total $total)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Total  $total
     * @return \Illuminate\Http\Response
     */
    public function destroy(Total $total)
    {
        //
    }
}