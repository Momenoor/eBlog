<?php

namespace App\Http\Controllers;

use App\Models\Permissions;
use Illuminate\Http\Request;
use App\Http\Requests\PermissionStoreRequest;
use App\Http\Requests\PermissionUpdateRequest;
class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('permission.index');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Permissions $permissions)
    {
        return view('permission.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permissions $permissions)
    {
        return view('permission.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionUpdateRequest $request, Permissions $permissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permissions $permissions)
    {
        //
    }
}
