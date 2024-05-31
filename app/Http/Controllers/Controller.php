<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\BahanBaku;
use App\Models\Produksi;
use App\Models\Pengiriman;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dashboard()
    {
        $data_admin = Admin::get()->count();
        $data_bahanbaku = BahanBaku::get()->count();
        $data_produksi = Produksi::get()->count();
        $data_pengiriman = Pengiriman::get()->count();
        return view('dashboard', compact( 'data_admin', 'data_bahanbaku', 'data_produksi', 'data_pengiriman'));
    }
}
