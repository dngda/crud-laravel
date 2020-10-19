<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
        $data = DB::table('barang')->get();
        return view('barang', ['barang' => $data]);
    }

    public function viewAdd()
    {
        return view('barang_add');
    }

    public function actionAdd(Request $request)
    {
        DB::table('barang')->insert([
            'nama_barang' => $request->nama,
            'jumlah_barang' => $request->jumlah,
            'harga_barang' => $request->harga
            ]);
        return redirect('/barang');
    }

    public function viewEdit($id)
    {
        $data = DB::table('barang')->where('id', $id)->first();
        return view('barang_edit', ['barang'=> $data]);
    }

    public function actionEdit(Request $request)
    {
        DB::table('barang')->where('id',$request->id)->update([
            'nama_barang' => $request->nama,
            'jumlah_barang' => $request->jumlah,
            'harga_barang' => $request->harga
            ]);
            return redirect('/barang');
    }

    public function actionDelete($id)
    {
        DB::table('barang')->where('id', $id)->delete();
        return redirect('/barang');
    }
}
