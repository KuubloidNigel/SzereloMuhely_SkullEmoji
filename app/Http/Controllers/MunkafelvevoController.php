<?php

namespace App\Http\Controllers;

use App\Models\Munkafelvevo;
use App\Models\Munkalap;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMunkafelvevoRequest;
use App\Http\Requests\UpdateMunkafelvevoRequest;


class MunkafelvevoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $munkafelvevos = Munkafelvevo::all();  // You might want to use pagination here
        return view('munkafelvevos.index', compact('munkafelvevos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('munkafelvevos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMunkafelvevoRequest $request)
    {
        Munkafelvevo::create($request->validated());
        return redirect()->route('munkafelvevos.index')->with('success', 'Munkafelvevo letrehozva');
    }

    /**
     * Display the specified resource.
     */
    public function show(Munkafelvevo $munkafelvevo)
    {
        return view('munkafelvevos.show', compact('munkafelvevo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Munkafelvevo $munkafelvevo)
    {
        return view('munkafelvevos.edit', compact('munkafelvevo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMunkafelvevoRequest $request, Munkafelvevo $munkafelvevo)
    {
        $munkafelvevo->update($request->validated());
        return redirect()->route('munkafelvevos.index')->with('success', 'Munkafelvevo frissitve');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Munkafelvevo $munkafelvevo)
    {
        $munkafelvevo->delete();
        return redirect()->route('munkafelvevos.index')->with('success', 'Munkafelvevo torolve');
    }
}
