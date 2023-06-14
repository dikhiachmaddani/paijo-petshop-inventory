<?php

namespace App\Http\Controllers\Report;

use App\Exports\KeluarBarangExport;
use App\Http\Controllers\Controller;
use App\Models\KeluarBarang;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportBarangKeluarController extends Controller
{
    public function index()
    {
        $data = KeluarBarang::all();
        return view('all-roles.report.barang-keluar.index', compact('data'));
    }

    public function exportExcel()
	{
		return Excel::download(new KeluarBarangExport, 'keluar-barang-analisis.xlsx');
	}
}
