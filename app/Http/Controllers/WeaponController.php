<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeaponRequest;
use App\Http\Requests\UpdateWeaponRequest;
use App\Models\Weapon;

class WeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreWeaponRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWeaponRequest $request)
    {
        $validated = $request->validated();

        $img = $request->file('image_link')->store('weapons', 'public');
        
        $weapon = new Weapon;
        $weapon->name = $validated['name'];
        $weapon->description = $request->description;
        $weapon->image_link = $img;
        $weapon->save();

        return redirect('add-weapon-form')->with('status', 'Weapon has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weapon  $weapon
     * @return \Illuminate\Http\Response
     */
    public function show(Weapon $weapon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Weapon  $weapon
     * @return \Illuminate\Http\Response
     */
    public function edit(Weapon $weapon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWeaponRequest  $request
     * @param  \App\Models\Weapon  $weapon
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWeaponRequest $request, Weapon $weapon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weapon  $weapon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weapon $weapon)
    {
        //
    }
}
