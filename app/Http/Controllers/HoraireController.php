<?php

namespace App\Http\Controllers;

use App\Models\Feeder;
use App\Models\Horaire;
use Illuminate\Http\Request;

class HoraireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.horaire_feeder');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feeder = Feeder::findOrFail(request('id'));

        return view('pages.add_horaire',[
            'id' => $feeder->id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feeder = Feeder::findOrFail(request('id'));
        $request->validate([
            'heureD' => ['required'],
            'heureF' => ['required'],
            'type' => ['required']
        ]);

        Horaire::create([
            'HeureDebut' => $request->heureD,
            'HeureFin' => $request->heureF,
            'Type' => $request->type,
            'feeder_id' => $feeder->id
        ]);

        return redirect()->route('horaire.show',$feeder->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horaires = Horaire::where('feeder_id',$id)->get();

        return view('pages.horaire_feeder',[
            'horaires' => $horaires,
            'id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horaire = Horaire::findOrFail($id);
        return view('pages.edit_horaire',[
            'horaire' => $horaire
        ]);
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

        $horaire = Horaire::findOrFail($id);
        $request->validate([
            'heureD' => ['required'],
            'heureF' => ['required'],
            'type' => ['required']
        ]);

        $horaire->update([
            'HeureDebut' => $request->heureD,
            'HeureFin' => $request->heureF,
            'Type' => $request->type,
            'feeder_id' => $horaire->feeder_id
        ]);
        return redirect()->route('horaire.show',$horaire->feeder_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        //return redirect()->route('horaire.show',$idd);
    }
    public function deleteh($id)
    {
        dd($id);
        // $horaire = Horaire::findOrFail($id);
        // dd($horaire);
        // $idd = $horaire->feeder_id;
        // $horaire->delete();

        //return redirect()->route('horaire.show',$idd);
    }
}
