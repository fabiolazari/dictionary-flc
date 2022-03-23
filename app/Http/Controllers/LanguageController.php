<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateLanguage;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::orderBy('description', 'ASC')->paginate(3);
        return view('admin.languages.index', compact('languages'));
    }

    public function create()
    {
        return view('admin.languages.create');
    }

    public function store(StoreUpdateLanguage $request)
    {
        $data = $request->all();

        //$request->file('flag');
        if ($request->flag->isValid()) {
            $nameFile = Str::of($request->description)->slug('-') . '.' . $request->flag->getClientOriginalExtension();
            $flag = $request->flag->storeAs('languages', $nameFile);
            $data['flag'] = $flag;
        }

        Language::create($data);

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

        if (Storage::exists($language->flag))
            Storage::delete($language->flag);

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

        $data = $request->all();

        if ($request->flag && $request->flag->isValid()) {
            if (Storage::exists($language->flag))
                Storage::delete($language->flag);

            $nameFile = Str::of($request->description)->slug('-') . '.' . $request->flag->getClientOriginalExtension();
            $flag = $request->flag->storeAs('languages', $nameFile);
            $data['flag'] = $flag;
        }

        $language->update($data);

        return redirect()
            ->route('languages.index')
            ->with('message', 'Língua atualizada com sucesso!');
    }

    public function search(Request $request)
    {
        $filters = $request->except('_token');

        $languages = Language::where('description', 'LIKE', "%{$request->search}%")
                            ->orderBy('description', 'ASC')->paginate();
        return view('admin.languages.index', compact('languages', 'filters'));
    }
}
