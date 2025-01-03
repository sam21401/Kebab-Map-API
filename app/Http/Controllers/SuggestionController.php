<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class SuggestionController extends Controller
{
    // Create a new suggestion
    public function addSuggestion(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:1000',
        ]);

        $suggestion = Suggestion::create([
            'user_id' => auth()->id(),
            'subject' => $request->subject,
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

    // Delete suggestion
    public function deleteSuggestion($id)
    {
        $user = auth()->user();

        // Check if the authenticated user is an admin
        if ($user->role !== 1) {
            return response()->json([
                'status' => false,
                'message' => 'Access denied. Admins only.',
            ], 403);
        }

        // Find the suggestion by ID
        $suggestion = Suggestion::find($id);

        if (!$suggestion) {
            return response()->json([
                'status' => false,
                'message' => 'Suggestion not found',
            ], 404);
        }

        // Delete the suggestion
        $suggestion->delete();

        return response()->json([
            'status' => true,
            'message' => 'Suggestion deleted successfully',
            'data' => null,
        ], 200);
    }
}
