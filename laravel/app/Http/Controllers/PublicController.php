<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phone = Phone::all();
        return view('phones.index', compact('phone'));
        // con il compact stiamo dicendo che $auto è la variabile da cui
        // prende il valore della variabile che si chiama "$auto" all'interno
        // della view auto.index
    }

    /**
     * Display the specified resource.
     *
     * @param  Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        return view('phone.show', compact('phone'));
    }
}
