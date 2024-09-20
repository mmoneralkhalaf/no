<?php

namespace App\Http\Controllers;

use App\Models\Wire;
use Illuminate\Http\Request;

class WireController extends Controller
{
    public function index()
    {
        $wires = Wire::all();
        return view('wires.index', compact('wires'));
    }

    public function create()
    {
        return view('wires.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'data' => 'required|string',
        ]);

        Wire::create($request->all() + ['user_id' => auth()->id()]);
        return redirect()->route('wires.index');
    }

    public function show(Wire $wire)
    {
        return view('wires.show', compact('wire'));
    }

    public function edit(Wire $wire)
    {
        return view('wires.edit', compact('wire'));
    }

    public function update(Request $request, Wire $wire)
    {
        $request->validate([
            'type' => 'required|string',
            'data' => 'required|string',
        ]);

        $wire->update($request->all());
        return redirect()->route('wires.index');
    }

    public function destroy(Wire $wire)
    {
        $wire->delete();
        return redirect()->route('wires.index');
    }
}
