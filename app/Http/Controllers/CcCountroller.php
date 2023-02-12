<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Cous;
use Illuminate\Http\Request;

class CcCountroller extends Controller
{
    public function int(Request $request)
    {
        $find = $request->pro_id;
        $fin = Client::find($find);
        $validatedData = $request->validate([
            'Product_name' => ['required', 'max:255'],
            'qr' => ['required'],
        ]);
        $fin->update([
            'Nom' => $request->Product_name,
            'Adress' => $request->qr,
            'Total' => $request->vr,

        ]);

        session()->flash('Add', 'Add Succeful');
        return redirect('cli');
    }

    function de(Request $request)
    {

        $find = $request->pro_id;
        $fin = Client::find($find);
        $fin->delete();
        session()->flash('delete', 'delet succeful');
        return redirect('cli');
    }
}