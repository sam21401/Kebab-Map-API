<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SugestionViewsController extends Controller
{

    public function getAllSuggestions()
    {
        $user = auth()->user();

        if ($user->role !== 1) {
            return redirect()->route('home')->with('error', 'Access denied. Admins only.');
        }
        $suggestions = Suggestion::with('user')->get();
        return view('suggestions.index', compact('suggestions'));
    }


    public function markAsReviewed($id)
    {
        $user = auth()->user();


        if ($user->role !== 1) {
            return redirect()->route('home')->with('error', 'Access denied. Admins only.');
        }

        $suggestion = Suggestion::find($id);
        if (!$suggestion) {
            return redirect()->back()->with('error', 'Suggestion not found.');
        }

        $suggestion->is_reviewed = true;
        $suggestion->save();

        return redirect()->route('suggestions.index')->with('success', 'Suggestion marked as reviewed');
    }

    public function deleteSuggestion($id)
    {
        $user = auth()->user();
        if ($user->role !== 1) {
            return redirect()->route('home')->with('error', 'Access denied. Admins only.');
        }

        $suggestion = Suggestion::find($id);
        if (!$suggestion) {
            return redirect()->back()->with('error', 'Suggestion not found.');
        }

        $suggestion->delete();

        return redirect()->route('suggestions.index')->with('success', 'Suggestion deleted successfully');
    }


}
