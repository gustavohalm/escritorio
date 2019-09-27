<?php

namespace App\Http\Controllers;
use App\ParnershipAgricultural;
use App\Agricultural;
use Illuminate\Http\Request;

class ParnershipAgriculturalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(ParnershipAgricultural::all());
    }
    public function per_agricultural($agricultural_id)
    {
        $parnerships = ParnershipAgricultural::all()->where('agricultural_id', $agricultural_id);
        return response()->json($parnerships);
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
        $this->validate($request, [
            'agricultural_id' => 'required',
            'farmer_id' => 'required',
            'percent' => 'required'
        ]);
        
        return ParnershipAgricultural::create($request->all());
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
        return response()->json(ParnershipAgricultural::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
