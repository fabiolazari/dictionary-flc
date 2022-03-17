<?php

namespace App\Http\Controllers;

use App\Models\Sentence;
use Illuminate\Http\Request;

class SentenceController extends Controller
{
    public function index()
    {
        $sentences = Sentence::get();
        return view('admin.sentences.index', compact('sentences'));
    }

    public function create()
    {
        return view('admin.sentences.create');
    }

    public function store(Request $request)
    {
        Sentence::create($request->all());
        return redirect()->route('sentences.index');
    }

    public function show($id)
    {
        if (!$sentence = Sentence::find($id))
            return redirect()->route('sentences.index');

        return view('admin.sentences.show', compact('sentence'));
    }

    public function destroy($id)
    {
        if (!$sentence = Sentence::find($id))
            return redirect()->route('sentences.index');

        $sentence->delete();

        return redirect()
                ->route('sentences.index')
                ->with('message', 'Sentença deletada com sucesso!');
    }
}
