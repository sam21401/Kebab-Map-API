<?php

namespace App\Http\Controllers;

use App\Models\Kebab;
use Illuminate\Http\Request;

class KebabViewsController extends Controller
{


    public function index()
    {
        $kebabs = Kebab::all();
        return view('kebabs.index', compact('kebabs'));
    }

    public function create()
    {
        return view('kebabs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'year_opened' => 'required|numeric',
        ]);

        Kebab::create($request->all());
        return redirect()->route('kebabs.index');
    }

    public function edit(Kebab $kebab)
    {
        return view('kebabs.edit', compact('kebab'));
    }

    public function update(Request $request, Kebab $kebab)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'year_opened' => 'required|numeric',
        ]);

        $kebab->update($request->all());
        return redirect()->route('kebabs.index');
    }

    public function destroy(Kebab $kebab)
    {
        $kebab->delete();
        return redirect()->route('kebabs.index');
    }

}
