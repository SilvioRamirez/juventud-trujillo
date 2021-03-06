<?php

namespace App\Http\Controllers;

use App\User;
use App\Municipio;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }
    
    public function getUsers()
    {
        $users = User::select(['id','name','cedula','telefono','municipio','email']);
        
        return Datatables::of($users)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::pluck('municipio', 'municipio');
        return view('users.create', compact('municipios'));
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
            'name'      => 'required|string|max:255',
            'cedula'    => 'required|string|min:5|max:15|unique:users',
            'telefono'  => 'required|string|min:12|max:12',
            'municipio' => 'required',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
        ]);        

        User::create([
            'name'      => $request->name,
            'cedula'    => $request->cedula,
            'telefono'  => $request->telefono,
            'municipio'  => $request->municipio,
            'email'     => $request->email,
            'password'  => Hash::make($request->password)
        ]);

        return back()->with('success', 'Se han registrado los datos de '.$request->name.'.');
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
        $user = User::find($id);
        $roles = Role::get();
        $municipios = Municipio::pluck('municipio', 'municipio');
        return view('users.edit', compact('user', 'municipios', 'roles'));
    }

    public function delete($id)
    {
        $user = User::find($id);
        return view('users.delete', compact('user'));
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
        $user = User::find($id);
        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.edit', $user->id)->with('info', 'Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($id != 1) {
            $user = User::find($id);
            $user->delete();
            //return view('users.index')->with('success', 'Se han eliminado los datos de '.$user->name.'.');
            return redirect()->route('users.index');
        }else{
            return back()->with('error', 'No se puede eliminar a este usuario.');
        } 
    }
}
