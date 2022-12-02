<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('pages.agents',[
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add_agent');
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
            'mail' => ['required','unique:users,email'],
            'phone' => ['required'],
            'sexe' => ['required'],
            'password' => ['required'],
            'confirm' => [''],
            'file' => ['required']
        ]);

        $filename = time().'.'.$request->file->extension();

        $path = $request->file->storeAs(
            'avatars',
            $filename,
            'public'
        );

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->mail,
            'sexe'=>$request->sexe,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
            'file'=>$path
        ]);

        return redirect('/user');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id',$id)->firstOrfail();

        return view('pages.edit_agent',[
            'user' => $user,
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
        // dd($request);
        $request->validate([
            'name' => ['required'],
            'mail' => ['required'],
            'phone' => ['required'],
            'sexe' => ['required'],
            'password' => ['required'],
            'file' => ['required']
        ]);

        // dd($request);

        $filename = time().'.'.$request->file->extension();

        $path = $request->file->storeAs(
            'avatars',
            $filename,
            'public'
        );
        $user =  User::findOrfail($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->mail,
            'sexe'=>$request->sexe,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
            'file'=>$path
        ]);

        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/user');
    }
}
