<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodts= Producto::all();
        return view("productos.index", compact("prodts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['pro_sec'=>'required','pro_pre'=>'required','pro_fec'=>'required','pro_ori'=>'required']);

        $producto=new Producto;
        $producto->pro_nom=$request->pro_nom;
        $producto->pro_sec=$request->pro_sec;
        $producto->pro_pre=$request->pro_pre;
        $producto->pro_fec=$request->pro_fec;
        $producto->pro_ori=$request->pro_ori;
        $producto->save();
        return redirect("/productos");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prodts= Producto::findOrFail($id);
        return view("productos.show",compact("prodts"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pdts=Producto::findOrFail($id);
        return view("productos.edit",compact("pdts"));
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
        $prodact=Producto::findOrFail($id);
        $prodact->update($request->all());
        return redirect("/productos");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prodeli=Producto::findOrFail($id);
        $prodeli->delete();
        return redirect("/productos");
    }
}
