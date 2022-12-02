<?php

namespace App\Http\Controllers;

use App\Models\Feeder;
use Illuminate\Http\Request;

class FeederController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeders = Feeder::all();
        return view('pages.feeders',[
            'feeders' => $feeders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add_feeder');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'ip' => ['required'],
            'field' => ['required'],
            'api' => ['required']
        ]);

        Feeder::create([
            'designation' => $request->name,
            'ip' => $request->ip,
            'api' => $request->api,
            'name' => $request->field,
            'value' => -1
        ]);

        return redirect('/feeder');
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
        $feeder = Feeder::findOrFail($id);
        return view('pages.edit_feeder',[
            'feeder' => $feeder
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
        $request->validate([
            'name' => ['required'],
            'ip' => ['required'],
            'field' => ['required'],
            'api' => ['required']
        ]);

        $feeder = Feeder::findOrFail($id);
        $feeder->update([
            'designation' => $request->name,
            'ip' => $request->ip,
            'api' => $request->api,
            'name' => $request->field,
        ]);

        return redirect('/feeder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feeder = Feeder::findOrFail($id);
        $feeder->delete();
        return redirect('/feeder');
    }
}
