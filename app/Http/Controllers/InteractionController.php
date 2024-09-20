<?php

namespace App\Http\Controllers;
use App\Models\Interaction;
use Illuminate\Http\Request;

class InteractionController extends Controller
{
    public function index() {
        $interactions = Interaction::all();
        return view('interactions.index', compact('interactions'));
    }

    public function show($id) {
        $interaction = Interaction::find($id);
        return view('interactions.show', compact('interaction'));
    }

    public function create() {
        return view('interactions.create');
    }

    public function store(Request $request) {
        Interaction::create($request->all());
        return redirect()->route('interactions.index');
    }

    public function edit($id) {
        $interaction = Interaction::find($id);
        return view('interactions.edit', compact('interaction'));
    }

    public function update(Request $request, $id) {
        $interaction = Interaction::find($id);
        $interaction->update($request->all());
        return redirect()->route('interactions.index');
    }

    public function destroy($id) {
        Interaction::destroy($id);
        return redirect()->route('interactions.index');
    }
}
