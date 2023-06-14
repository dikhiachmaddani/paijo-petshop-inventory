<?php

namespace App\Exports;

use App\Models\KeluarBarang;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class KeluarBarangExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('keluar_barangs')
        ->join('users', 'users.id', '=', 'keluar_barangs.user_id')
        ->join('master_data_barangs', 'master_data_barangs.id', '=', 'keluar_barangs.master_data_barang_id')
        ->select(
            'keluar_barangs.created_at',
            'users.name',
            'keluar_barangs.reference',
            'master_data_barangs.item_name',
            'keluar_barangs.price',
            'keluar_barangs.stock',
            'keluar_barangs.remarks',
        )
        ->get();
    }
}
