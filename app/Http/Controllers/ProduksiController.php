<?php

namespace App\Http\Controllers;

use App\Models\BahanBaku;
use App\Models\Produksi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProduksiController extends Controller
{
    public function index(){
        $data = Produksi::get(); 
        return view('Produksi/Produksi', compact('data'));
    }

    public function add(){
        $data_bahanbaku = BahanBaku::get();
        return view('Produksi/addProduksi', compact('data_bahanbaku'));
    }

    public function insertdata(Request $request){
        Produksi::create($request->all());
        return redirect()->route('Produksi')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = Produksi::find($id);
        $data_bahanbaku = BahanBaku::get();
        return view('Produksi/updateProduksi' , compact('data', 'data_bahanbaku'));
    }

    public function viewdata($id){
        $data = Produksi::find($id);
        $data_bahanbaku = BahanBaku::get();
        return view('Produksi/viewProduksi' , compact('data', 'data_bahanbaku'));
    }

    public function updatedata(Request $request, $id){
        $data = Produksi::find($id);
        $data->update($request->all());
        return redirect()->route('Produksi')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Produksi::find($id);
        $data->delete();
        return redirect()->route('Produksi')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = Produksi::all();
        $PDF = PDF::loadView('Produksi/reportProduksi', array('data' => $data));
        return $PDF->stream('data-produksi.pdf');
    }
}
