<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user= User::orderBy('id','desc')->paginate(5);
        return view('crud', compact('user'));
    }

    public function create()
    {
        return view('crud_create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //User::create($request->all());
        $post = new User([
            'name' => $request->input('first_name'),
            'email' => $request->input('last_name'),            
            'password' => $request->input('address'),            
        ]);

        $post->save();
        return redirect()->route('crud_get')->with('success','creado con exito ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user= User::findOrFail($id);
        return view('crud_get', compact('user'));
    }

    public function edit(string $id)
    {
        $user= User::findOrFail($id);
        return view('crud_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        
        return redirect()->route('crud_get')->with('success', 'actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('crud_get')->with('success', 'Eliminado con exito!');
    }
}
