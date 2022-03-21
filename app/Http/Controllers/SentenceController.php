<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateSentence;
use App\Models\Sentence;
use Illuminate\Http\Request;

class SentenceController extends Controller
{
    public function index()
    {
        $sentences = Sentence::orderBy('description', 'ASC')->paginate();
        return view('admin.sentences.index', compact('sentences'));
    }

    public function create()
    {
        return view('admin.sentences.create');
    }

    public function store(StoreUpdateSentence $request)
    {
        Sentence::create($request->all());
        
        return redirect()
            ->route('sentences.index')
            ->with('message', 'Sentença inserida com sucesso!');
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

    public function edit($id)
    {
        if (!$sentence = Sentence::find($id))
            return redirect()->route('sentences.index');

        return view('admin.sentences.edit', compact('sentence'));
    }

    public function update(StoreUpdateSentence $request, $id)
    {
        if (!$sentence = Sentence::find($id))
            return redirect()->route('sentences.index');

        $sentence->update($request->all());

        return redirect()
            ->route('sentences.index')
            ->with('message', 'Sentença atualizada com sucesso!');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $sentences = Word::where('description', 'LIKE', "%{$request->search}%")
                            ->orWhere('meaning', 'LIKE', "%{$request->search}%")
                            ->orderBy('description', 'ASC')->paginate();
        return view('admin.sentences.index', compact('sentences', 'filters'));
    }
}
