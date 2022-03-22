<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateWord;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index()
    {
        $words = Word::orderBy('description', 'ASC')->paginate();
        return view('admin.words.index', compact('words'));
    }

    public function create()
    {
        return view('admin.words.create');
    }

    public function store(StoreUpdateWord $request)
    {
        Word::create($request->all());

        return redirect()
            ->route('words.index')
            ->with('message', 'Palavra inserida com sucesso!');
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

    public function edit($id)
    {
        if (!$word = Word::find($id))
            return redirect()->route('words.index');

        return view('admin.words.edit', compact('word'));
    }

    public function update(StoreUpdateWord $request, $id)
    {
        if (!$word = Word::find($id))
            return redirect()->route('words.index');

        $word->update($request->all());

        return redirect()
            ->route('words.index')
            ->with('message', 'Palavra atualizada com sucesso!');
    }

    public function search(Request $request)
    {
        //$filters = $request->all();
        $filters = $request->except('_token');

        $words = Word::where('description', 'LIKE', "%{$request->search}%")
                        ->orWhere('meaning', 'LIKE', "%{$request->search}%")
                        ->orWhere('note', 'LIKE', "%{$request->search}%")
                        ->orderBy('description', 'ASC')->paginate();
        return view('admin.words.index', compact('words', 'filters'));
    }
}
