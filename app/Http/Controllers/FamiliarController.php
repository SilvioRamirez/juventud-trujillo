<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familiar;
use Yajra\Datatables\Datatables;

class FamiliarController extends Controller
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
        
    }

    public function getFamiliars($cedula)
    {
        $familiars = Familiar::select([
            'id',
            'nombres',
            'cedula',
            'edad', 
            'parentezco',
            'beneficiario_mision'
        ])->where('cedula_persona','=', $cedula);
        
        return Datatables::of($familiars)->make(true);
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
        $this->validate($request, [
            'cedula_persona'        => 'required',
            'nombres'               => 'required',
            'cedula'                => 'required',
            'edad'                  => 'required',
            'parentezco'            => 'required'
        ]);

        Familiar::create($request->all());

        return;
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
    public function updateFamiliar(Request $request, $id)
    {
        $this->validate($request, [
            'cedula_persona'        => 'required',
            'nombres'               => 'required',
            'cedula'                => 'required',
            'edad'                  => 'required',
            'parentezco'            => 'required'
        ]);

        Familiar::find($id)->update($request->all());

        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteFamiliar($id)
    {
        if(isset($id)){
            $familiar = Familiar::where('id', '=', $id)->first();
            $familiar->delete();
            return 'success';
        }
        
        
       
        
    }
}
