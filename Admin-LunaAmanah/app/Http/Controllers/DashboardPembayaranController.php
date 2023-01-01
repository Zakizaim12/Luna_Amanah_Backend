<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPembayaranController extends Controller
{
    public function bayar()
    {
        return view('dashboard.pembayaran.index');
    }
}
