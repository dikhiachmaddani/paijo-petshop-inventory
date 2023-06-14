<?php

namespace App\Http\Controllers;

use App\Models\MasterDataBarang;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data_item = MasterDataBarang::all()->count();
        $zero_stock = MasterDataBarang::all()->where('stock', 0)->count();
        $max_stock = MasterDataBarang::all()->where('stock', '>', 100)->count();
        $new_item = MasterDataBarang::all()->where('created_at', '<=', Carbon::now()->subDays(2)->toDateTimeString())->count();
        $data_resource = DB::table('master_data_barangs')
        ->select(
            'master_data_barangs.item_name as name',
            'master_data_barangs.stock as data',
        )
        ->get();

        $chart = [];
        foreach ($data_resource as $item) {
            $chart[] = [
                'name' => $item->name,
                'data' => [$item->data],
            ];
        }
        return view('all-roles.dashboard.index', compact('data_item','chart', 'zero_stock', 'max_stock', 'new_item'));
    }
}
