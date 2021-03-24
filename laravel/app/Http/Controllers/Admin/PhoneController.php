<?php

namespace App\Http\Controllers\Admin;

use App\Phone;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();
        return view('phones.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateForm($request);

        $data = $request->all();

        $beer = new Phone();
        $beer->fill($data);
        $beer->save();

        $beerStored = Phone::orderBy('id', 'desc')->first();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Phone  $phones
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Phone  $phones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phones)
    {
        //
    }

    protected function validateForm(Request $request)
    {
        $request->validate([
            'brand' => 'required|max:255',
            'price' => 'required',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Phone  $phones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phones)
    {
        $phones->delete();
        return redirect()->route('phones.index');
    }
}
