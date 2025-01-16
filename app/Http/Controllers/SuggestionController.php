<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

/**
 * @group Suggestion management
 *
 * APIs for managing suggestions
 */
class SuggestionController extends Controller
{
    /**
     * Create a new suggestion.
     *
     * This endpoint allows authenticated users to submit a suggestion.
     * Users must provide a subject for their suggestion, which is
     * validated to ensure it is a string with a maximum length of 1000 characters.
     *
     * @bodyParam subject string required The subject of the suggestion. Example: "Improve user interface."
     *
     * @response 201 {
     *   "status": true,
     *   "message": "Suggestion submitted successfully",
     *   "data": {
     *     "id": 1,
     *     "user_id": 1,
     *     "subject": "Improve user interface.",
     *     "created_at": "2025-01-16T12:00:00.000000Z",
     *     "updated_at": "2025-01-16T12:00:00.000000Z"
     *   }
     * }
     * @response 422 {
     *   "status": false,
     *   "message": "Validation error",
     *   "errors": {
     *     "subject": ["The subject field is required.", "The subject must be a string.", "The subject may not be greater than 1000 characters."]
     *   }
     * }
     * @authenticated
     */

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

    /**
     * Get all suggestions.
     *
     * This endpoint retrieves all suggestions submitted by users.
     * Only users with admin privileges can access this endpoint.
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Suggestions retrieved successfully",
     *   "data": [
     *     {
     *       "id": 1,
     *       "user_id": 1,
     *       "subject": "Improve user interface.",
     *       "is_reviewed": false,
     *       "created_at": "2025-01-16T12:00:00.000000Z",
     *       "updated_at": "2025-01-16T12:00:00.000000Z"
     *     }
     *   ]
     * }
     * @response 403 {
     *   "status": false,
     *   "message": "Access denied. Admins only."
     * }
     * @authenticated
     */


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

    /**
     * Mark a suggestion as reviewed.
     *
     * This endpoint allows admins to mark a suggestion as reviewed.
     * The user must provide the ID of the suggestion to be reviewed.
     *
     * @urlParam id integer required The ID of the suggestion to mark as reviewed. Example: 1
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Suggestion marked as reviewed",
     *   "data": {
     *     "id": 1,
     *     "user_id": 1,
     *     "subject": "Improve user interface.",
     *     "is_reviewed": true,
     *     "created_at": "2025-01-16T12:00:00.000000Z",
     *     "updated_at": "2025-01-16T12:00:00.000000Z"
     *   }
     * }
     * @response 403 {
     *   "status": false,
     *   "message": "Access denied. Admins only."
     * }
     * @response 404 {
     *   "status": false,
     *   "message": "Suggestion not found"
     * }
     * @authenticated
     */

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

    /**
     * Delete a suggestion.
     *
     * This endpoint allows admins to delete a specific suggestion by ID.
     * The user must provide the ID of the suggestion to be deleted.
     *
     * @urlParam id integer required The ID of the suggestion to delete. Example: 1
     *
     * @response 200 {
     *   "status": true,
     *   "message": "Suggestion deleted successfully",
     *   "data": null
     * }
     * @response 403 {
     *   "status": false,
     *   "message": "Access denied. Admins only."
     * }
     * @response 404 {
     *   "status": false,
     *   "message": "Suggestion not found"
     * }
     * @authenticated
     */

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

