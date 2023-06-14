<?php

namespace App\Exports;

use App\Models\MasterDataBarang;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class MasterDataBarangExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DB::table('master_data_barangs')
        ->join('brand', 'brand.id', '=', 'master_data_barangs.brand_id')
        ->join('uom', 'uom.id', '=', 'master_data_barangs.uom_id')
        ->join('category', 'category.id', '=', 'master_data_barangs.category_id')
        ->select(
            'master_data_barangs.serial_number',
            'brand.name_brand',
            'master_data_barangs.item_name',
            'master_data_barangs.price',
            'uom.unit',
            'master_data_barangs.stock',
            'category.name_category',
        )
        ->get();
    }
}
