<?php

namespace App\Http\Controllers;

use App\Http\Requests\MasterDataBarangRequest;
use App\Models\MasterDataBarang;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Uom;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MasterDataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MasterDataBarang::orderBy('created_at', 'DESC')->get();
        return view('all-roles.master-data.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        $uom = Uom::all();
        $category = Category::all();
        return view('all-roles.master-data.create', compact('brand', 'uom', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMasterDataBarangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MasterDataBarangRequest $request)
    {
        $data = $request->validated();
        $data = [
            'image' => $request->image,
            'serial_number' => $request->serial_number,
            'item_name' => $request->item_name,
            'brand_id' => $request->brand_id,
            'uom_id' => $request->uom_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'stock' => 0,
        ];
        if ($request->hasFile('image')) {
            $foto = $request->file('image');
            $ext = $foto->getClientOriginalExtension();
            if ($request->file('image')->isValid()) {
                $nama_foto = Str::random(10) . ".$ext";
                $upload_path = 'assets/images/products';
                $foto->move($upload_path, $nama_foto);
                $data['image'] = $upload_path.'/'.$nama_foto;
            }
        }
        MasterDataBarang::create($data);
        return redirect()->route('dashboard.master-data-barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MasterDataBarang  $masterDataBarang
     * @return \Illuminate\Http\Response
     */
    public function show(MasterDataBarang $masterDataBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MasterDataBarang  $masterDataBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterDataBarang $masterDataBarang)
    {
        $brand = Brand::all();
        $uom = Uom::all();
        $category = Category::all();
        return view('all-roles.master-data.edit', compact('masterDataBarang', 'brand', 'uom', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMasterDataBarangRequest  $request
     * @param  \App\Models\MasterDataBarang  $masterDataBarang
     * @return \Illuminate\Http\Response
     */
    public function update(MasterDataBarangRequest $request, MasterDataBarang $masterDataBarang)
    {
        $request->validated();
        if ($request->image != null) {
            $data = [
                'image' => $request->image,
                'serial_number' => $request->serial_number,
                'item_name' => $request->item_name,
                'brand_id' => $request->brand_id,
                'uom_id' => $request->uom_id,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'stock' => 0,
            ];
            if ($request->hasFile('image')) {
                $foto = $request->file('image');
                $ext = $foto->getClientOriginalExtension();
                if ($request->file('image')->isValid()) {
                    $nama_foto = Str::random(10) . ".$ext";
                    $upload_path = 'assets/images/products';
                    $foto->move($upload_path, $nama_foto);
                    $data['image'] = $upload_path.'/'.$nama_foto;
                }
            }
        } else {
            $data = [
                'image' => $masterDataBarang->image,
                'serial_number' => $request->serial_number,
                'item_name' => $request->item_name,
                'brand_id' => $request->brand_id,
                'uom_id' => $request->uom_id,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'stock' => 0,
            ];
        }
        $masterDataBarang->update($data);
        return redirect()->route('dashboard.master-data-barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MasterDataBarang  $masterDataBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterDataBarang $masterDataBarang)
    {
        try {
            DB::commit();
            $masterDataBarang->delete();
            return redirect()->route('dashboard.master-data-barang.index')->with('success', 'master data barang delete successfully');
        }catch (Exception ) {
            DB::rollBack();
            return redirect()->route('dashboard.master-data-barang.index')->with('error', 'cant delete master data barang');
        }
    }
}
