<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Http\Requests\UomRequest;
use App\Models\Uom;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uom = Uom::all();
        return view('all-roles.master-data-unit.uom.index', compact('uom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('all-roles.master-data-unit.uom.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UomRequest $request)
    {
        $data = $request->validated();

        try {
            DB::beginTransaction();
            Uom::create($data);
            DB::commit();
            alert()->success('Title', 'Lorem Lorem Lorem');

            return redirect()->route('uom.index')->with('success', 'create user successfully');
        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->route('uom.index')->with('error', 'user failed to create');
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
        $data = Uom::find($id);
        return view('all-roles.master-data-unit.uom.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UomRequest $request, $id)
    {
        $findData = Uom::find($id);
        $validating = $request->validated();
        $findData->update($validating);

        alert()->success('Title', 'Lorem Lorem Lorem');

        return redirect()->route('uom.index');
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
            $delete = Uom::destroy($id);
            DB::commit();

            alert()->success('Title', 'Lorem Lorem Lorem');

            return redirect()->route('uom.index');
        } catch (Exception $exception) {
            DB::rollBack();

            alert()->success('Title', 'Lorem Lorem Lorem');

            return redirect()->route('uom.index');
        }
    }
}
