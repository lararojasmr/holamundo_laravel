<?php
/**
 * Created by PhpStorm.
 * User: larar
 * Date: 28/8/2016
 * Time: 9:32 PM
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HolaMundoController extends Controller
{

    /**
     * Show HolaMundo message to my friends Julio and Jonas.
     *
     * @return string "Hola Mundo"
     */
    public function showHolaMundo()
    {
        return view('test.holamundo', ['msg' => 'Hola Mundo Chamacos']);
    }
}