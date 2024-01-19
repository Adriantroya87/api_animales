<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado_animales = Animal::all();
        return response()-> json ($listado_animales, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //el store es para grabar
    {
        $animal = new Animal();
        $animal->nombre = $request->nombre;
        $animal->numero_patas = $request->numero_patas;
        $animal->altura_maxima = $request->altura_maxima;
        $animal->save();
        return response()->json($animal, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //para devolver por id
    {
        $animales = Animal::find($id);
        return response()-> json ($animales, 200);
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
        $animales = Animal::find($id);
        $animales->nombre = $request->nombre;
        $animales->numero_patas = $request->numero_patas;
        $animales->altura_maxima = $request->altura_maxima;
        $animales->save();
        return response()-> json ($animales, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animales = Animal::find($id);
        $animales->delete();
        return response()-> json ($animales, 200);
    }
}
