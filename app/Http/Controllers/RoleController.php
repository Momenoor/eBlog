<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\RolesStoreRequest;
use App\Http\Requests\RolesUpdateRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('role.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RolesStoreRequest $request)
    {
        try {
            $validated = $request->validated();
            $role = new Role();
            $role->name = $request->name;
            $role->description = $request->description;
            $role->save();
            return redirect()->route('role.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

        /*Roles::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);*/
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $roles)
    {
        return view('role.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $roles)
    {
        return view('role.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RolesUpdateRequest $request, Role $roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $roles)
    {
        //
    }
}
