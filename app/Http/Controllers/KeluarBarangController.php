<?php

namespace App\Http\Controllers;

use App\Http\Requests\KeluarBarangRequest;
use App\Models\KeluarBarang;
use App\Http\Requests\StoreKeluarBarangRequest;
use App\Http\Requests\UpdateKeluarBarangRequest;
use App\Models\MasterDataBarang;
use App\Models\User;

class KeluarBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = KeluarBarang::orderBy('created_at', 'DESC')->get();
        return view('all-roles.keluar-barang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $master_data_barang = MasterDataBarang::all();
        $picker = User::all()->where('role', 'operator');
        return view('all-roles.keluar-barang.create', compact('master_data_barang', 'picker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKeluarBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KeluarBarangRequest $request)
    {
        $request->validated();

        // updated stock
        $master_data = MasterDataBarang::findOrFail($request->master_data_barang_id);

        if ($master_data->stock == 0 || $master_data->stock <= $request->stock) {
            alert()->error('Title', 'Lorem Lorem Lorem');
            return redirect()->back();
        }

        $master_data->update([
            'stock' => $master_data->stock - $request->stock
        ]);

        $data = [
            'reference' => $request->reference,
            'user_id' => $request->user_id,
            'master_data_barang_id' => $request->master_data_barang_id,
            'price' => $master_data->price * $request->stock,
            'stock' => $request->stock,
            'remarks' => $request->remarks
        ];
        KeluarBarang::create($data);
        return redirect()->route('dashboard.keluar-barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KeluarBarang  $keluarBarang
     * @return \Illuminate\Http\Response
     */
    public function show(KeluarBarang $keluarBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KeluarBarang  $keluarBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(KeluarBarang $keluarBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeluarBarangRequest  $request
     * @param  \App\Models\KeluarBarang  $keluarBarang
     * @return \Illuminate\Http\Response
     */
    public function update(KeluarBarangRequest $request, KeluarBarang $keluarBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KeluarBarang  $keluarBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(KeluarBarang $keluarBarang)
    {
        //
    }
}
