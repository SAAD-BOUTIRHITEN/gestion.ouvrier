<?php

namespace App\Http\Controllers;

use App\Models\Farine;
use Illuminate\Http\Request;

class UpdelController extends Controller
{
    public function update(Request $request)
    {
        $find = $request->pro_id;
        $fin = Farine::find($find);
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
        return redirect('farine');
    }


    function del(Request $request)
    {

        $find = $request->pro_id;
        $fin = Farine::find($find);
        $fin->delete();
        session()->flash('delete', 'delet succeful');
        return redirect('farine');
    }
}
