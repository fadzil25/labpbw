<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class RestoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function readdata()
    {
        //mau ambil data dari tabel mahasiswa
        $restorant= DB::table('restorant')->get();

        // mengirim ke halaman restorant untuk ditampilkan data
        return view('datarestorant',['restorant'=>$restorant]);
    }

    public function input()
    {
        return view('inputdata');
    }

    public function store(Request $request)
    {
        //memasukkan data kedalam databse
        DB::table('restorant')->insert([
            'nama_pemesan' => $request->nama_pemesan,
            'no_hp' => $request->no_hp,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'harga_total' => $request->harga_total,
            'status' => $request->status
        ]);

        return redirect('/tampildata');
    }

    public function edit($nama_pemesan)
    {
        #ambil data restorant berdasarkan nama_pemesan
        $restorant = DB::table('restorant')->where('nama_pemesan', $nama_pemesan)->get();

        #passing data
        return view('edit', ['restorant' => $restorant]);
    }

    public function update(Request $request)
    {
        DB::table('restorant')->where('id', $request->id)->update([
            'nama_pemesan' => $request->nama_pemesan,
            'no_hp' => $request->no_hp,
            'jumlah_pesanan' => $request->jumlah_pesanan,
            'harga_total' => $request->harga_total,
            'status' => $request->status
        ]);

        return redirect('/tampildata');

    }

    public function hapus($nama_pemesan)
    {
        DB::table('restorant')->where('nama_pemesan', $nama_pemesan)->delete();
        return redirect('/tampildata');
    }
}
