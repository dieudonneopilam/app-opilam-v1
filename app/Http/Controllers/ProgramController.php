<?php

namespace App\Http\Controllers;

use App\Models\Feeder;
use App\Models\Program;
use App\Models\User;
use Faker\Provider\UserAgent;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();

        return view('pages.programmes',[
            'programs' => $programs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $agents = User::all();
        $feeders = Feeder::all();
        return view('pages.add_programme',[
            'agents' => $agents,
            'feeders' => $feeders
        ]);
        return view('pages.add_programme');
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
            'agent' => ['required'],
            'feeder' => ['required']
        ]);

        Program::create([
            'feeder_id' => $request->feeder,
            'user_id' => $request->agent,
            'dateP' => now()
        ]);

        return redirect('/programme');
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
        $program = Program::findOrFail($id);
        $agents = User::all();
        $feeders = Feeder::all();
        return view('pages.edit_programme',[
            'program' => $program,
            'agents' => $agents,
            'feeders' => $feeders
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
            'agent' => ['required'],
            'feeder' => ['required']
        ]);

        $program =  Program::findOrFail($id);
        $program->update([
            'feeder_id' => $request->feeder,
            'user_id' => $request->agent,
            'dateP' => now()
        ]);

        return redirect('/programme');
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

        $program = Program::findOrFail($id);
        $program->delete();
        return redirect('/programme');


    }
}
