<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class limpiezaController extends Controller
{
    public function index()
    {
        return view('procesar');
    }

    public function procesar(Request $request)
    {
        $texto = $request->input('texto');
        $texto_limpio = $this->limpiarTexto($texto);
        $texto_encryptado = $this->encryptarTexto($texto);

        return view('procesar', [
            'texto_limpio' => $texto_limpio, 
            'texto_encryptado' => $texto_encryptado]);
    }

    private function limpiarTexto($texto)
    {
        $texto_limpio = preg_replace('/[^A-Za-z0-9]/', '', $texto);
        return $texto_limpio;
    }

    private function encryptarTexto($texto)
    {
        $texto_encryptado = hash('sha256', $texto);
        return $texto_encryptado;
    }
}
