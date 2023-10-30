<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    //


    public function index()
    {
        //
        //  $listadoDeClientes = Cliente::all();
        //   return view('cliente.index', compact('listadoDeClientes'));
        return view('calendar.index');
    }
}
