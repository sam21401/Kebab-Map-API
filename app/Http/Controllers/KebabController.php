<?php

namespace App\Http\Controllers;

use App\Models\Kebab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KebabController extends Controller
{
    // Show all
    public function showAllKebab()
    {
        if (Auth::user()->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        $kebabs = Kebab::all();

        return response()->json([
            'status' => true,
            'message' => 'List of Kebabs',
            'data' => $kebabs
        ], 200);
    }

    // Show by id
    public function showKebab($id)
    {
        if (Auth::user()->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        $kebab = Kebab::find($id);

        if (!$kebab) {
            return response()->json([
                'status' => false,
                'message' => 'Kebab not found'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'message' => 'Kebab details',
            'data' => $kebab
        ], 200);
    }

    // Add new
    public function addKebab(Request $request)
    {
        if (Auth::user()->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|string',
            'address' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'year_opened' => 'required|integer',
            'year_closed' => 'nullable|integer',
            'opening_hours' => 'required|json',
            'meat_types' => 'required|json',
            'sauces' => 'required|json',
            'status' => 'nullable|string',
            'is_craft' => 'boolean',
            'is_in_stall' => 'boolean',
            'is_chain_member' => 'boolean',
            'ordering_options' => 'required|json',
        ]);

        $kebab = Kebab::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Kebab created successfully',
            'data' => $kebab
        ], 201);
    }

    // Update
    public function updateKebab(Request $request, $id)
    {
        if (Auth::user()->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        $kebab = Kebab::find($id);

        if (!$kebab) {
            return response()->json([
                'status' => false,
                'message' => 'Kebab not found'
            ], 404);
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'logo' => 'nullable|string',
            'address' => 'sometimes|required|string',
            'latitude' => 'sometimes|required|numeric',
            'longitude' => 'sometimes|required|numeric',
            'year_opened' => 'sometimes|required|integer',
            'year_closed' => 'sometimes|integer',
            'opening_hours' => 'sometimes|required|json',
            'meat_types' => 'sometimes|required|json',
            'sauces' => 'sometimes|required|json',
            'status' => 'nullable|string',
            'is_craft' => 'boolean',
            'is_in_stall' => 'boolean',
            'is_chain_member' => 'boolean',
            'ordering_options' => 'sometimes|required|json',
        ]);

        $kebab->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Kebab updated successfully',
            'data' => $kebab
        ], 200);
    }

    // Delete
    public function delKebab($id)
    {
        if (Auth::user()->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        $kebab = Kebab::find($id);

        if (!$kebab) {
            return response()->json([
                'status' => false,
                'message' => 'Kebab not found'
            ], 404);
        }

        $kebab->delete();

        return response()->json([
            'status' => true,
            'message' => 'Kebab deleted successfully',
            'data' => null
        ], 200);
    }
}
