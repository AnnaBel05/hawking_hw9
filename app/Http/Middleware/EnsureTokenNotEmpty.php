<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Character;
use Symfony\Component\CssSelector\Node\ElementNode;

class EnsureTokenNotEmpty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->name || !$request->description)
        {            
            return redirect('add-character-form');
        }
        else
        {
            $characterExist = Character::all();
            $truth = false;
            foreach ($characterExist as $character)
            {
                if($character->name == $request->name)
                {
                    $truth = true;
                } 
            }
            if ($truth)
            {
                return redirect('add-character-form')->with('status', 'This character already exists');
            }
            else
            {
                return $next($request);
            }
        }
    }
}
