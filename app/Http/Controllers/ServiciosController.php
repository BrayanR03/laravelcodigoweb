<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateServicioRequest;
use Illuminate\Http\Request;
use App\Models\Servicio;
use Illuminate\Support\Facades\Storage;
/*use DB;*/
class ServiciosController extends Controller
{
    public function index(){
    /*      $servicios=DB::table('servicios')->get();
      */
      $servicios=Servicio::get();
      return view('servicios',compact('servicios'));
    }
    public function create(){
      return view('create',[
        'servicios'=>new Servicio
      ]);
    }
    public function edit(Servicio $servicio){
      return view('edit',[
        'servicios'=>$servicio
      ]);
    }

    public function update(Servicio $servicio,CreateServicioRequest $request){
      if ($request->hasFile('image')) {
        Storage::delete($servicio->image);
        $servicio->fill($request->validated());
        $servicio->image=$request->file('image')->store('images');
        $servicio->save();
      } else {
        
      $servicio->update(array_filter($request->validated()));
      }
      
      return redirect()->route('servicios.show',$servicio);
    }


/*EDIT Y UPDATE JUNTO CON DESTROY MODIFICAR EL PARAMETRO a servicio pero en singular */


    
    public function store(CreateServicioRequest $request){
      //Recogemos variables de las cajas de texto de los formularios
      $servicio=new Servicio($request->validated());
      $servicio->image=$request->file('image')->store('images');
      $servicio->save();

      return redirect()->route('servicios.index');
    }
    public function show($id){


      return view('show',[
      'servicios'=>Servicio::find($id)]);
    }

   public function destroy(Servicio $servicio){
    Storage::delete($servicio->image);
    $servicio->delete();
    return redirect()->route('servicios.index');
   }

}
