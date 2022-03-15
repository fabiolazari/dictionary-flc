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
}
