<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
        $animal = Animal::all();

        return view('home', compact('animal'));
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $animal = Animal::create($request->except('_token'));
        
        return redirect('home');
    }

    public function edit($id)
    {
        $animal = Animal::find($id);
        $animal->all();

        return view('update/edit', compact('animal'));
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::find($id);
        $animal->update($request->all());
        
        return redirect('home');
    }

    public function destroy($id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        
        return redirect('home');
    }
}
