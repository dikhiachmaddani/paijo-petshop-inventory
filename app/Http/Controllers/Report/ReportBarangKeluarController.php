<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportBarangKeluarController extends Controller
{
    public function index()
    {
        return view('report.barang-keluar.index');
    }
}
