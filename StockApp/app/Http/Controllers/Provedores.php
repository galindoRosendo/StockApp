<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\TblSupplier;

use Illuminate\Support\Facades\DB;

class Provedores extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $provedores= TblSupplier::all();
        return view('home')->with(['Provedor'=>true,'Encabezado'=>'Provedores','Provedores'=>$provedores]);
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
        $this->validate($request,[
          'SupplierName'=>'required'
        ]);

        $provedor = new TblSupplier();
        $provedor->SupplierName=$request->SupplierName;

        if ($provedor->save()) {
          return back()->with('msj','Datos guardados');
        }else{
        return back()->with('errMsj','Error al guardas los datos');
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
        //
        $provedor= TblSupplier::where('Supplier_id',$id)->first();
        return view('home')->with(['Encabezado'=>'Provedores','editProvedor'=>true,'provedor'=>$provedor]);
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
        $this->validate($request,[
          'SupplierName'=>'required'
        ]);

        $provedor = TblSupplier::where('Supplier_id',$id)->first();

        $verificacion = DB::table('tbl_suppliers')
            ->where('Supplier_id', $id)
            ->update(['SupplierName' => $request->SupplierName]);

        if ($verificacion) {
          return back()->with('msj','Datos guardados');
        }else{
        return back()->with('errMsj','Error al guardas los datos');
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
        $provedor= TblSupplier::where('Supplier_id',$id)->delete();
        return back();
    }
}
