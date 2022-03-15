<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        Word::create($request->all());
        return redirect()->route('words.index');
    }
}
