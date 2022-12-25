<?php

namespace App\Http\Controllers;

use App\Http\Resources\StanovnikResource;
use App\Models\Stanovnik;
use Illuminate\Http\Request;

class StanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_stan = Stanovnik::all();

        return StanovnikResource::collection($all_stan);
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
     * @param  \App\Models\Stanovnik  $stanovnik
     * @return \Illuminate\Http\Response
     */
    public function show(Stanovnik $stanovnik)
    {
        return new StanovnikResource($stanovnik);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stanovnik  $stanovnik
     * @return \Illuminate\Http\Response
     */
    public function edit(Stanovnik $stanovnik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stanovnik  $stanovnik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stanovnik $stanovnik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stanovnik  $stanovnik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stanovnik $stanovnik)
    {
        $status = Stanovnik::find($stanovnik->id)->delete();

        return response()->json(['Obrisan', $status]);
    }
}
