<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Imagenes;

class imageUpController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('imageUploade');
    }

    //funcion agregar imagenes
    public function upload(Request $request)
    {
        try {
            $request->validate(['image'=>'required|image|mimes:png,jpg,jpeg']);
            $imageName = time().".".$request->image->extension();
            $request->image->storeAs('public/images/productos', $imageName);
            return redirect()->route('images')->with('success','Mensaje recibido correctamente');
        } catch (\Exception $e) {
            return redirect()->route('images')->with('failed','El formato de las imagenes debe ser un error PNG');
        }
    }

    public function uploadfolder(Request $request)
    {
        try {
            $request->validate(['image'=>'required|image|mimes:pdf,xml']);
            $archivoName = time().".".$request->images->extension();
            $request->image->storeAs('public/images/productos', $archivoName);
            return redirect()->route('images')->with('success','Mensaje recibido correctamente');
        } catch (\Exception $e) {
            return redirect()->route('images')->with('failed','El formato del archivo no coinciden');
        }
    }

    public function eliminar($imageName){
        $imagePath = 'public/images/productos/'.$imageName;
        if(Storage::exists($imagePath)){
            Storage::delete($imagePath);
            return redirect()->back()->with('success','Imagen eliminada');
        }
        else{
            return redirect()->back()->with('failed','Imagen no eliminada');
            }
        }
    }
