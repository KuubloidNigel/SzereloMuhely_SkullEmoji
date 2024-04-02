<?php

namespace App\Http\Controllers;

use App\Models\Szerelo;
use App\Models\Munkalap;  // Assuming a relationship between Szerelo and Munkalap
use Illuminate\Http\Request;
use App\Http\Requests\StoreSzereloRequest;
use App\Http\Requests\UpdateSzereloRequest;

class SzereloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $szerelos = Szerelo::all();  // You might want to use pagination here
        return view('szerelos.index', compact('szerelos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('szerelos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSzereloRequest $request)
    {
        Szerelo::create($request->validated());
        return redirect()->route('szerelos.index')->with('success', 'Szerelo letrehozva');
    }

    /**
     * Display the specified resource.
     */
    public function show(Szerelo $szerelo)
    {
        return view('szerelos.show', compact('szerelo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Szerelo $szerelo)
    {
        return view('szerelos.edit', compact('szerelo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSzereloRequest $request, Szerelo $szerelo)
    {
        $szerelo->update($request->validated());
        return redirect()->route('szerelos.index')->with('success', 'Szerelo frissitve');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Szerelo $szerelo)
    {
        $szerelo->delete();
        return redirect()->route('szerelos.index')->with('success', 'Szerelo torolve');
    }
}
