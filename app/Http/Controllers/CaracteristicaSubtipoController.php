<?php

namespace App\Http\Controllers;

use App\CaracteristicaSubtipo;
use Illuminate\Http\Request;

class CaracteristicaSubtipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = CaracteristicaSubtipo::select();
        if ($request->input('id')) {
            $q = $q->where('id', $request->input('id'));
        }
        return datatables()->of($q->get())->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaracteristicaSubtipo  $caracteristicaSubtipo
     * @return \Illuminate\Http\Response
     */
    public function show(CaracteristicaSubtipo $caracteristicaSubtipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaracteristicaSubtipo  $caracteristicaSubtipo
     * @return \Illuminate\Http\Response
     */
    public function edit(CaracteristicaSubtipo $caracteristicaSubtipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaracteristicaSubtipo  $caracteristicaSubtipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaracteristicaSubtipo $caracteristicaSubtipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaracteristicaSubtipo  $caracteristicaSubtipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaracteristicaSubtipo $caracteristicaSubtipo)
    {
        //
    }
}
