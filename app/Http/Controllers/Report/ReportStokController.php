<?php

namespace App\Http\Controllers\Report;

use App\Exports\MasterDataBarangExport;
use App\Http\Controllers\Controller;
use App\Models\MasterDataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ReportStokController extends Controller
{
    public function index()
    {
        $data = MasterDataBarang::all();
        return view('all-roles.report.stok.index', compact('data'));
    }

	public function exportExcel()
	{
		return Excel::download(new MasterDataBarangExport, 'stok-analisis.xlsx');
	}
}
