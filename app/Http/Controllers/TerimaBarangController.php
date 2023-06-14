<?php

namespace App\Http\Controllers;

use App\Models\TerimaBarang;
use App\Http\Requests\StoreTerimaBarangRequest;
use App\Http\Requests\TerimaBarangRequest;
use App\Http\Requests\UpdateTerimaBarangRequest;
use App\Models\MasterDataBarang;
use App\Models\User;
use Illuminate\Http\Request;

class TerimaBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TerimaBarang::orderBy('created_at', 'DESC')->get();
        return view('all-roles.terima-barang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $master_data_barang = MasterDataBarang::all();
        $users = User::all();
        return view('all-roles.terima-barang.create', compact('master_data_barang', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTerimaBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TerimaBarangRequest $request)
    {
        $request->validated();

        // updated stock
        $master_data = MasterDataBarang::findOrFail($request->master_data_barang_id);
        $master_data->update([
            'stock' => $request->stock + $master_data->stock
        ]);

        $data = [
            'reference' => $request->reference,
            'supplier' => $request->supplier,
            'master_data_barang_id' => $request->master_data_barang_id,
            'price' => $master_data->price * $request->stock,
            'stock' => $request->stock,
            'remarks' => $request->remarks
        ];
        TerimaBarang::create($data);
        return redirect()->route('dashboard.terima-barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TerimaBarang  $terimaBarang
     * @return \Illuminate\Http\Response
     */
    public function show(TerimaBarang $terimaBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TerimaBarang  $terimaBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(TerimaBarang $terimaBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTerimaBarangRequest  $request
     * @param  \App\Models\TerimaBarang  $terimaBarang
     * @return \Illuminate\Http\Response
     */
    public function update(TerimaBarangRequest $request, TerimaBarang $terimaBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TerimaBarang  $terimaBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(TerimaBarang $terimaBarang)
    {
        //
    }
}
