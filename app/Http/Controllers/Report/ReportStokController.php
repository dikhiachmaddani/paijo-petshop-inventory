<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportStokController extends Controller
{
    public function index()
    {
        return view('report.stok.index');
    }
}
