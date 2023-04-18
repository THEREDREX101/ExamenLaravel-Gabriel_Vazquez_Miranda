<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\losproductos;

use Illuminate\Support\Facades\validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $producto= losproductos::all();
        return view('home', compact('producto'));
    }
    
    public function edit($id){
        $producto = losproductos::findOrFail($id);
        return view('edit', compact('producto'));
    }
    
    public function update(Request $request, $id){
        $producto = losproductos::findOrFail($id);
        $producto->nombre=$request->nombre;
        $producto->marca=$request->marca;
        $producto->precio=$request->precio;
        $producto->cantidad=$request->cantidad;
        $producto->save();
        return redirect()->route('home.index');
    }

    public function store(Request $request){
        

        $producto = new losproductos();
        $producto->nombre=$request->nombre;
        $producto->marca=$request->marca;
        $producto->precio=$request->precio;
        $producto->cantidad=$request->cantidad;
        $producto->save();
        return back();
    }

    public function destroy($id)
    {
        $producto = losproductos::findOrFail($id);
        $producto->delete();
        return back();
    }   
}
?>
