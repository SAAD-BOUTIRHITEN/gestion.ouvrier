<?php

namespace App\Http\Controllers;

use App\Models\Pate;
use Illuminate\Http\Request;

class UppaController extends Controller
{
    function index(request $request)
    {
        $find = $request->pro_id;
        $fin = Pate::find($find);
        $validatedData = $request->validate([
            'Product_name' => ['required', 'max:255'],
            'qr' => ['required'],
        ]);
        $fin->update([
            'produit' => $request->Product_name,
            'Quantité' => $request->qr,
            'Valeur' => $request->vr,

        ]);

        session()->flash('Add', 'Add Succeful');
        return redirect('pate');
    }
    function dell(Request $request)
    {

        $find = $request->pro_id;
        $fin = Pate::where('produit', '=', $find);
        $fin->delete();
        session()->flash('delete', 'delet succeful');
        return redirect('pate');
    }
}