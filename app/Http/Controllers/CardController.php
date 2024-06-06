<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::with('subject')->get();
        $subjects = Subject::orderBy('name', 'ASC')->get();
        return view('cards.index', compact('cards', 'subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::orderBy('name', 'ASC')->get();
        return view('cards.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject_id' => 'required',
            'question' => 'required',
            'answer' => 'required',
        ]);

        Card::create([
            'subject_id' => $request->subject_id,
            'user_id' => Auth::id(),
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return redirect()->route('card.index')->with([
            'message' => 'Flash Card created successfully!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        return view('cards.show', compact('card'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        return view('cards.edit', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        $card->delete();
        return redirect()->route('card.index')->with([
            'message' => 'Card deleted successfully!',
            'alert-type' => 'success',
        ]);
    }
}
