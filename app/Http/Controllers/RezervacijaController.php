<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rezervacija;

class RezervacijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function index(Request $request)
    {
        $rezervacijas = Rezervacija::orderBy('id','DESC')->paginate(5);
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
 public function postApprove($id) {
     
     
    $rezervacija = rezervacija::where('id', '=', e($id))->first();
    if($rezervacija)
    {
        $rezervacija->status_rezervacije = 1;
        $rezervacija->save();
        //return a view or whatever you want tto do after
    }
     return redirect()->route('rezervacija.index')
                        ->with('success','Stavke uspjesno obrisane');
    
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
    public function edit(Request $request, $id)
    {
        $rezervacija = rezervacija::where('id', '=', e($id))->first();
    if($rezervacija)
    {
        $rezervacija->Status = 'Odbijena';
        $rezervacija->save();
        //return a view or whatever you want tto do after
    }
     return redirect()->route('rezervacija.index')
                        ->with('success','Rezervacija odbijena');
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
             
    $rezervacija = Rezervacija::where('id', '=', e($id))->first();
    if($rezervacija)
    {
        $rezervacija->Status = 'Odobrena';
        $rezervacija->save();
        //return a view or whatever you want tto do after
    }
     return redirect()->route('rezervacija.index')
                        ->with('success','Rezervacija odobrena');
    
    }
    
    public function update2($id)
    {
             
    $rezervacija = Rezervacija::where('id', '=', e($id))->first();
    if($rezervacija)
    {
        $rezervacija->Status = 'Odbijeno';
        $rezervacija->save();
        //return a view or whatever you want tto do after
    }
     return redirect()->route('rezervacija.index')
                        ->with('success','Rezervacija odbijena');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         rezervacija::find($id)->delete();
        return redirect()->route('rezervacija.index')
                        ->with('success','Rezervacija odbijena i obrisana');
    }
}
