<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Http\Requests\StorePostRequest;

class CharacterController extends Controller
{
    // finished
    public function index()
    {
        $characters = Character::all();
        return view('view-characters', compact('characters'));
    }

    public function indexAnemo()
    {
        $characters = Character::where('element_id', 1)->get();
        return view('view-characters', compact('characters'));
    }

    // todo:
    public function show($id)
    {
        $character = Character::where('id',1);
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
    public function store(StorePostRequest $request)
    {
        $validated = $request->validated();

        $img = $request->file('image_link')->store('images', 'public');
        
        $character = new Character;
        $character->name = $validated['name'];
        $character->description = $request->description;
        $character->image_link = $img;
        $character->save();
        return redirect('add-character-form')->with('status', 'Character has been added');
    }
}
