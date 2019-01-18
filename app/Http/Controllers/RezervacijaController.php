<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rezervacija;

class RezervacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rezervacijas = rezervacija::orderBy('id','DESC')->paginate(5);
        return view('rezervacija.index',compact('rezervacijas'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rezervacija.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'broj_osoba' => 'required',
            'datum' => 'required',
            'vrijeme' => 'required',
            'ime_korisnika' => 'required',
            'prezime_korisnika' => 'required',
            'broj_telefona' => 'required',
            'email_korisnika' => 'required',
            'napomena' => 'required',
        ]);


        rezervacija::create($request->all());

        return redirect()->route('rezervacija.index')
                        ->with('success','Rezervacija uspjesno izvrsena');
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
    }
}
