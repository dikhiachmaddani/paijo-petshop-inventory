<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = Brand::all();
        return view('all-roles.master-data-unit.brand.index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('all-roles.master-data-unit.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $data = $request->validated();

        try {
            DB::beginTransaction();
            Brand::create($data);
            DB::commit();
            return redirect()->route('brand.index')->with('success', 'create user successfully');
        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->route('brand.index')->with('error', 'user failed to create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Brand::find($id);
        return view('all-roles.master-data-unit.brand.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequest $request, $id)
    {
        $findData = Brand::find($id);
        $validating = $request->validated();
        $findData->update($validating);

        alert()->success('Title', 'Lorem Lorem Lorem');

        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            $delete = Brand::destroy($id);
            DB::commit();

            alert()->success('Title', 'Lorem Lorem Lorem');

            return redirect()->route('brand.index');
        } catch (Exception $exception) {
            DB::rollBack();

            alert()->success('Title', 'Lorem Lorem Lorem');

            return redirect()->route('brand.index');
        }
    }
}
