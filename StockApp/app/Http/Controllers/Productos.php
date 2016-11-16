<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TblProduct;

use Illuminate\Support\Facades\DB;

class Productos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $productos = TblProduct::all();
        return view('home')->with(['Productos'=>true,'Encabezado'=>'Productos','productos' => $productos]);


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
      //dd($request->descripcion);
      $this->validate($request, [
        'nombre'=>'required',
        'descripcion'=>'required',
        'unidad'=>'required'


      ]);

      $producto = new TblProduct();
      $producto->ProductName = $request->nombre;
      $producto->ProductDescription = $request->descripcion;
      $producto->UnitOfMeasure = $request->unidad;

      if($producto->save()){
        return back()->with('msj','Datos Guardados');
      } else {
        return back()->with('msjError','Error al guardar datos');
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
      $producto = TblProduct::where('ProductID',$id)->first();
      return view('home')->with(['editProducto' =>true, 'Encabezado'=>'Productos', 'producto'=>$producto]);
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
        $this->validate($request,[
          'ProductName'=>'required','ProductDescription'=>'required','UnitOfMeasure'=>'required'
        ]);

        $verificacion = DB::table('tbl_products')
        ->where('ProductID',$id)
        ->update(['ProductName'=>$request->ProductName,'ProductDescription'=>$request->ProductDescription,'UnitOfMeasure'=>$request->UnitOfMeasure]);
        if($verificacion){
          return back()->with('msj','Datos Guardados');
        } else {
          return back()->with('msjError','Error al guardar datos');
        }

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
        TblProduct::where('ProductID',$id)->delete();
        return back();
    }

}
