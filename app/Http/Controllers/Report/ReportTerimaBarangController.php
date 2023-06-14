<?php

namespace App\Http\Controllers\Report;

use App\Exports\TerimaBarangExport;
use App\Http\Controllers\Controller;
use App\Models\TerimaBarang;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ReportTerimaBarangController extends Controller
{
    public function index()
    {
        $data = TerimaBarang::all();
        return view('all-roles.report.terima-barang.index', compact('data'));
    }

    public function exportExcel()
	{
		return Excel::download(new TerimaBarangExport, 'terima-barang-analisis.xlsx');
	}
}
