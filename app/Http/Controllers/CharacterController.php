<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    // finished
    public function index()
    {
        $characters = Character::all();
        return view('view-characters', compact('characters'));
    }

    // todo:
    public function show($id)
    {
        $character = Character::findOrFail($id);
        return view('show-character', compact('character'));
    }

    // todo:
    public function destroy($id)
    {

    }

    // finished
    public function add()
    {
        return view('add-character-form');
    }

    // finished
    public function store(Request $request)
    {
        $character = new Character;
        $character->name = $request->name;
        $character->description = $request->description;
        $character->save();
        return redirect('add-character-form')->with('status', 'Character has been added');
    }
}
