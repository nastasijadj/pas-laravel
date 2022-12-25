<?php

namespace App\Http\Controllers;

use App\Http\Resources\PasResource;
use App\Models\Pas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psi = Pas::all();
        return PasResource::collection($psi);
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

        $validator = Validator::make($request->all(), [
            'sifra' => 'required',
            'rasa' => 'required',
            'godine' => 'required',
            'stanovnik_id' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['Error', $validator->errors()]);
        }


        $pas = Pas::create([
            'sifra' => $request->sifra,
            'rasa' => $request->rasa,
            'godine' => $request->godine,
            'stanovnik_id' => $request->stanovnik_id,
            'kompanija_id' => $request->kompanija_id,
        ]);

        return response()->json(['Novi pas', $pas]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pas  $pas
     * @return \Illuminate\Http\Response
     */
    public function show(Pas $pas)
    {
        return new PasResource($pas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pas  $pas
     * @return \Illuminate\Http\Response
     */
    public function edit(Pas $pas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pas  $pas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pas $pas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pas  $pas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pas $pas)
    {
        //
    }
}
