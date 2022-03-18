<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateLanguage;
use App\Models\Language;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::get();
        return view('admin.languages.index', compact('languages'));
    }

    public function create()
    {
        return view('admin.languages.create');
    }

    public function store(StoreUpdateLanguage $request)
    {
        Language::create($request->all());
        
        return redirect()
            ->route('languages.index')
            ->with('message', 'Língua inserida com sucesso!');
    }

    public function show($id)
    {
        if (!$language = Language::find($id))
            return redirect()->route('languages.index');

        return view('admin.languages.show', compact('language'));
    }

    public function destroy($id)
    {
        if (!$language = Language::find($id))
            return redirect()->route('languages.index');

        $language->delete();

        return redirect()
                ->route('languages.index')
                ->with('message', 'Língua deletada com sucesso!');
    }

    public function edit($id)
    {
        if (!$language = Language::find($id))
            return redirect()->route('languages.index');

        return view('admin.languages.edit', compact('language'));
    }

    public function update(StoreUpdateLanguage $request, $id)
    {
        if (!$language = Language::find($id))
            return redirect()->route('languages.index');

        $language->update($request->all());

        return redirect()
            ->route('languages.index')
            ->with('message', 'Língua atualizada com sucesso!');
    }
}
