<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BahanBakuController extends Controller
{
    public function index(){
        $data = BahanBaku::get(); 
        return view('BahanBaku/BahanBaku', compact('data'));
    }

    public function add(){
        return view('BahanBaku/addBahanBaku');
    }

    public function insertdata(Request $request){
        
        $request->validate([
            'jenis' => 'required',
            'jumlah' => 'required',
            'harga' => 'required', 
        ]);

        $data = BahanBaku::create([
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);
        return redirect()->route('BahanBaku')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = BahanBaku::find($id);
        return view('BahanBaku/updateBahanBaku' , compact('data'));
    }

    public function viewdata($id){
        $data = BahanBaku::find($id);
        return view('BahanBaku/viewBahanBaku' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = BahanBaku::find($id);
        $request->validate([
            'jenis' => 'required',
            'jumlah' => 'required',
            'harga' => 'required', 
        ]);

        $data -> update([
            'jenis' => $request->jenis,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);
        return redirect()->route('BahanBaku')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = BahanBaku::find($id);
        $data->delete();
        return redirect()->route('BahanBaku')->with('danger', 'Data Berhasil Dihapus!');
    }
    public function exportpdf(){
        $data = BahanBaku::all();
        $PDF = PDF::loadView('BahanBaku/reportBahanBaku', array('data' => $data));
        return $PDF->stream('data-bahan-baku.pdf');
    }
}
