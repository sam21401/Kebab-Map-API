<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    // Create a new suggestion
    public function addSuggestion(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        $suggestion = Suggestion::create([
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Suggestion submitted successfully',
            'data' => $suggestion,
        ], 201);
    }

    // Get all suggestions
    public function getAllSuggestions()
    {
        $user = auth()->user();

        if ($user->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Access denied. Admins only.',
            ], 403);
        }

        $suggestions = Suggestion::all();

        return response()->json([
            'status' => true,
            'message' => 'Suggestions retrieved successfully',
            'data' => $suggestions,
        ], 200);
    }

    // Mark a suggestion as reviewed
    public function markAsReviewed($id)
    {
        $user = auth()->user();

        if ($user->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Access denied. Admins only.',
            ], 403);
        }

        $suggestion = Suggestion::find($id);

        if (!$suggestion) {
            return response()->json([
                'status' => false,
                'message' => 'Suggestion not found',
            ], 404);
        }

        $suggestion->is_reviewed = true;
        $suggestion->save();

        return response()->json([
            'status' => true,
            'message' => 'Suggestion marked as reviewed',
            'data' => $suggestion,
        ], 200);
    }
}
