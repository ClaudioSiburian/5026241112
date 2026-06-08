<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class NilaiKuliahController extends Controller
{
    // menampilkan data nilai kuliah
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();

        foreach ($nilaikuliah as $n) {
            if ($n->NilaiAngka <= 40) {
                $n->nilaihuruf = 'D';
            } elseif ($n->NilaiAngka <= 60) {
                $n->nilaihuruf = 'C';
            } elseif ($n->NilaiAngka <= 80) {
                $n->nilaihuruf = 'B';
            } else {
                $n->nilaihuruf = 'A';
            }

            $n->bobot = $n->NilaiAngka * $n->SKS;
        }

        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    // menampilkan form tambah
    public function tambah()
    {
        return view('nilaikuliah.tambah');
    }

    // insert data ke database
    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);

        return redirect('/nilaikuliah');
    }

    // menampilkan form edit
    public function edit($id)
    {
        $nilaikuliah = DB::table('nilaikuliah')
            ->where('ID', $id)
            ->get();

        return view('nilaikuliah.edit', [
            'nilaikuliah' => $nilaikuliah
        ]);
    }

    // update data
    public function update(Request $request)
    {
        DB::table('nilaikuliah')
            ->where('ID', $request->id)
            ->update([
                'NRP' => $request->NRP,
                'NilaiAngka' => $request->NilaiAngka,
                'SKS' => $request->SKS,
            ]);

        return redirect('/nilaikuliah');
    }

    // hapus data
    public function hapus($id)
    {
        DB::table('nilaikuliah')
            ->where('ID', $id)
            ->delete();

        return redirect('/nilaikuliah');
    }
}
