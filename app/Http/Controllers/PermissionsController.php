<?php

namespace App\Http\Controllers;

use App\Permissions;
use Illuminate\Http\Request;



class PermissionsController extends Controller
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
        $permisos=Permissions::orderBy('id','DESC')->paginate(10);

        //dd($permisos);

        return view('permissions.index',compact('permisos'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permiso=Permissions::create($request->all());

        return redirect()->route('permissions.create')->with('info','Permiso creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function show(Permissions $permissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permiso=Permissions::find($id);

        return view('permissions.edit',compact('permiso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permiso = Permissions::find($id);

        $permiso->fill($request->all())->save();

        return redirect()->route('permissions.index')->with('info', 'Permiso actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permiso = Permissions::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
