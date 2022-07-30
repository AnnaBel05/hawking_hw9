<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreElementRequest;
use App\Http\Requests\UpdateElementRequest;
use App\Models\Element;

class ElementController extends Controller
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
     * @param  \App\Http\Requests\StoreElementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreElementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function show(Element $element)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function edit(Element $element)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateElementRequest  $request
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateElementRequest $request, Element $element)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Element  $element
     * @return \Illuminate\Http\Response
     */
    public function destroy(Element $element)
    {
        //
    }
}
