<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class BelanjaController extends Controller
{
    public function index()
    {
        $belanja = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('keranjangbelanja.index', compact('belanja'));
    }

 public function beli()
    {
        return view('keranjangbelanja.beli');
    }

    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'kodeBarang' => $request->input('KodeBarang'),
            'jumlah'     => $request->input('Jumlah'),
            'harga'      => $request->input('Harga')
        ]);
        return redirect('/keranjang');
    }

    public function batal($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect('/keranjang');
    }
}
