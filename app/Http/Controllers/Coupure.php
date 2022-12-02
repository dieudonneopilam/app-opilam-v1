<?php

namespace App\Http\Controllers;

use App\Models\Feeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class Coupure extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $feeder = Feeder::findOrFail($id);
        $url = $feeder->api;
        $response = Http::connectTimeout(20)->get($url);

        $response->throw();

        if ($response->successful()) {

            $array []= $response->json();
            $filedname = $feeder->name;

            $field = $array[0] ["feeds"][1]["$filedname"];



            if ($field!=null) {
                $feeder->update([
                    'value' => $field
            ]);
            }

            $fieldvalue = $feeder->value;

            return view('pages.pageCoupure',[
                'feeder' => $feeder
            ]);
        }


        return view('pages.pageCoupure',[
            'feeder' => $feeder
        ]);
            //code...
        } catch (\Throwable $th) {
            return redirect()->route('faild');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $feeder = Feeder::findOrFail($id);
            $feederEtat = $feeder->value;

            if($feederEtat!=1){
                $value = 1;
            }else{
                $value=0;
            }
            $url = $feeder->ip.'='.$value;
            $reponse = Http::connectTimeout(20)->get($url);

            if($reponse->successful()){
                $feeder->update([
                    'value' => $value
                ]);
                return redirect('/coupure/'.$id);
            }

            return redirect('/home');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->route('faild');
        }
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
