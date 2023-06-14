<?php

namespace App\Exports;

use App\Models\TerimaBarang;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class TerimaBarangExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('terima_barangs')
        ->join('master_data_barangs', 'master_data_barangs.id', '=', 'terima_barangs.master_data_barang_id')
        ->select(
            'terima_barangs.created_at',
            'terima_barangs.reference',
            'terima_barangs.supplier',
            'master_data_barangs.item_name',
            'terima_barangs.price',
            'terima_barangs.stock',
            'terima_barangs.remarks',
        )
        ->get();
    }
}
