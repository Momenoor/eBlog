<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Http\Requests\PermissionStoreRequest;
use App\Http\Requests\PermissionUpdateRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionStoreRequest $request)
    {
        try {
            Permission::create($request->all());
            return redirect()->route('permission.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permissions)
    {
        return view('permission.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permissions)
    {
        return view('permission.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionUpdateRequest $request, Permission $permissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permissions)
    {
        //
    }
}
