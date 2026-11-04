<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\JournalRequest;
use App\Models\Journal;

class JournalController extends Controller
{
    public function index()
    {
        return Journal::orderBy('code')->get();
    }

    public function store(JournalRequest $request)
    {
        $journal = Journal::create($request->validated());

        return response()->json($journal, 201); // 201 = ressource créée
    }

    public function update(JournalRequest $request, Journal $journal)
    {
        $journal->update($request->validated());

        return $journal;
    }

    public function destroy(Journal $journal)
    {
        $journal->delete();

        return response()->noContent(); // 204
    }
}
