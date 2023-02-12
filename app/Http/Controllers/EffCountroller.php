<?php

namespace App\Http\Controllers;

use App\Models\Cous;
use Illuminate\Http\Request;

class EffCountroller extends Controller
{
    public function upp(Request $request)
    {
        $find = $request->pro_id;
        $fin = Cous::find($find);
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
        return redirect('co');
    }
    function de(Request $request)
    {

        $find = $request->pro_id;
        $fin = Cous::find($find);
        $fin->delete();
        session()->flash('delete', 'delet succeful');
        return redirect('co');
    }
}