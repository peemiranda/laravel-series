<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request):string
    {
        $series = Serie::query()->orderBy('name')->get();
        return view('series.index')->with('series', $series);
    }

    public function create():string
    {
        return view('series.create');
    }

    public function store(Request $request):string
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->name = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }
}
