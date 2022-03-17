<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        Language::create($request->all());
        return redirect()->route('languages.index');
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
}
