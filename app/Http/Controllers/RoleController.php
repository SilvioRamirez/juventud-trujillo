<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class RoleController extends Controller
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
        return view('roles.index');
    }
    
    public function getRoles()
    {
        $roles = Role::select(['id','name','slug','description']);
        
        return Datatables::of($roles)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('roles.create', compact('permissions'));
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
            'name'          => 'required',
            'slug'          => 'required',
            'description'   => 'required',
        ]);        

        $role = Role::create([
            'name'          => $request->name,
            'slug'          => $request->slug,
            'description'   => $request->description
        ]);

        $role->permissions()->sync($request->get('permissions'));

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
        $role = Role::find($id);
        $permissions = Permission::get();
        return view('roles.edit', compact('role', 'permissions'));
    }

    public function delete($id)
    {
        $role = Role::find($id);
        return view('roles.delete', compact('role'));
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
        $role = Role::find($id);
        $role->update($request->all());

        //Actualiza los permisos relacionados
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $role->id)->with('info', 'Rol actualizado con éxito');
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
            $role = Role::find($id);
            $role->delete();
            return redirect()->route('roles.index');
        }else{
            return back()->with('error', 'No se puede eliminar a este usuario.');
        } 
    }
}
