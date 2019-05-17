<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\Sertore;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{


   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(10);

        //prueba de la relacion uno auno sectores
        // $user=User::findOrFail(7);
        // return $user->sector; //simple uno

        //  $users=User::with(['sector'])->get();
        //  return $users;  //perfecto funciono

        //Pruena de uno a muchos y sector todo ok chingo
        // $users=User::with(['sector','cursos'])->get();
        // return $users;  //perfecto funciono

        return view('users.index', compact('users'));
    }


    public function create()
    {
        $roles = Role::get(); //se descargan todos los roles
        return view('users.create',compact('roles'));
    }


    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->password= bcrypt( $request->input("password") );

        $user->roles()->sync($request->get('roles'));

        $user->save();

        return redirect()->route('users.index')->with('info', 'Usuario creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //dd($User->id);

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::get(); //se descargan todos los roles

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //primero actualizamos el usuario
        $user->update($request->all());

        //actualizamos los roles
        $user->roles()->sync($request->get('roles'));

        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usuario actualizado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $User
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('info', 'Eliminado Correctamente');
    }
}
