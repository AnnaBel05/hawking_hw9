<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRarityRequest;
use App\Http\Requests\UpdateRarityRequest;
use App\Models\Rarity;

class RarityController extends Controller
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
     * @param  \App\Http\Requests\StoreRarityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRarityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rarity  $rarity
     * @return \Illuminate\Http\Response
     */
    public function show(Rarity $rarity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rarity  $rarity
     * @return \Illuminate\Http\Response
     */
    public function edit(Rarity $rarity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRarityRequest  $request
     * @param  \App\Models\Rarity  $rarity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRarityRequest $request, Rarity $rarity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rarity  $rarity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rarity $rarity)
    {
        //
    }
}
