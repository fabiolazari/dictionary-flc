<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateWord;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index()
    {
        $words = Word::get();
        return view('admin.words.index', compact('words'));
    }

    public function create()
    {
        return view('admin.words.create');
    }

    public function store(StoreUpdateWord $request)
    {
        Word::create($request->all());
        return redirect()->route('words.index');
    }

    public function show($id)
    {
       // $word = Word::where('id', $id)->first();
        if (!$word = Word::find($id))
            return redirect()->route('words.index');

        return view('admin.words.show', compact('word'));
    }

    public function destroy($id)
    {
        if (!$word = Word::find($id))
            return redirect()->route('words.index');

        $word->delete();
        
        return redirect()
                ->route('words.index')
                ->with('message', 'Palavra deletada com sucesso!');
    }
}
