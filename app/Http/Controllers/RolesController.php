<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use App\Http\Requests\RolesStoreRequest;
use App\Http\Requests\RolesUpdateRequest;
class RolesController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Roles $roles)
    {
        return view('role.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roles $roles)
    {
        return view('role.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RolesUpdateRequest $request, Roles $roles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Roles $roles)
    {
        //
    }
}
