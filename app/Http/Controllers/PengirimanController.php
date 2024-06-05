<?php

namespace App\Http\Controllers;

use App\Models\Produksi;
use App\Models\Pengiriman;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PengirimanController extends Controller
{
    public function index(){
        $data = Pengiriman::get(); 
        return view('Pengiriman/Pengiriman', compact('data'));
    }

    public function add(){
        $data_produksi = Produksi::get();
        return view('Pengiriman/addPengiriman', compact('data_produksi'));
    }

    public function insertdata(Request $request){
        Pengiriman::create($request->all());
        return redirect()->route('Pengiriman')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = Pengiriman::find($id);
        $data_produksi = Produksi::get();
        return view('Pengiriman/updatePengiriman' , compact('data', 'data_produksi'));
    }

    public function viewdata($id){
        $data = Pengiriman::find($id);
        $data_produksi = Produksi::get();
        return view('Pengiriman/viewPengiriman' , compact('data', 'data_produksi'));
    }

    public function updatedata(Request $request, $id){
        $data = Pengiriman::find($id);
        $data->update($request->all());
        return redirect()->route('Pengiriman')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = Pengiriman::find($id);
        $data->delete();
        return redirect()->route('Pengiriman')->with('danger', 'Data Berhasil Dihapus!');
    }

    public function exportpdf(){
        $data = Pengiriman::all();
        $PDF = PDF::loadView('Pengiriman/reportPengiriman', array('data' => $data));
        return $PDF->stream('data-pengiriman.pdf');
    }
}
