<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('productos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validación
       // dd($request->all());   
        $rules =[
            'nombre_producto' => 'required|min:5|max:80|string',
            'descripcion' => 'required|max:200',
            //'status' => 'same:venta',
            'activo' => 'required|boolean',
            'precio' => 'numeric|regex:/^[\d]{0,}(.[\d]{2})?$/',
            'oferta_desde' => 'date_format:Y-m-d',
            'oferta_hasta' => 'date_format:Y-m-d|after:oferta_desde',
            // preguntar escapar
            'codigo_producto' => ''

        ];
        $messages = [
            'required'=>'El campo :attribute es obligatorio.'
            
        ];
        $validatedData = $request->validate($rules, $messages);
        return "OK!";
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
        //
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
