<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CharacterController extends Controller
{
    // finished
    public function index()
    {
        $characters = DB::table('characters')
            ->join('weapons', 'characters.weapon_id', '=', 'weapons.id')
            ->join('elements', 'characters.element_id', '=', 'elements.id')
            ->select('characters.*', 'weapons.weapon_name', 'elements.element_name')
            ->get()
        ;

        Cache::put('characterList', $characters, 600);
        return view('view-characters', compact('characters'));
    }

    public function indexAnemo()
    {
        $characters = Character::where('element_id', 1)->get();
        Cache::put('characterListAnemo', $characters);
        return view('view-characters', compact('characters'));
    }

    // todo:
    public function show($id)
    {
        $character = Character::where('id',$id)->get();

        if (Storage::disk('public')->exists($character->image_link))
        {
            $contents = Storage::get($character->image_link);
        }

        $url = Storage::url($character->image_link);

        $img = Image::make('test.jpg')
            ->resize(200,200)
            ->insert($character
            ->image_link,'top-left')
            ->text('testImage',0,0)
        ;

        Cache::put('characterBest', $character);
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

        $img = $request->file('image_link')->store('characters', 'public');
        
        $character = new Character;
        $character->name = $validated['name'];
        $character->description = $request->description;
        $character->image_link = $img;

        $image = Image::make(Storage::get($character->image_link));
        $image->resize(100, 100);

        Storage::put("$img", $image, 'public');        

        $character->save();
        Cache::put('characterRecent', $character);
        Cache::tags(['characters', 'latest'])->put('characterRecent', $character);
        return redirect('add-character-form')->with('status', 'Character has been added');
    }
}
