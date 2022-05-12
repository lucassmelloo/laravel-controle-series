<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemSucesso = session('mensagem.sucesso');
        return view('series.index')
            ->with('series',$series)
            ->with('mensagemSucesso',$mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        /* $request->session()->flash('mensagem.sucesso', "Serie {$serie->nome} criada com sucesso"); */

        return redirect('series')
            ->with('mensagem.sucesso', "Serie {$serie->nome} criada com sucesso");

    }

    public function destroy(Serie $serie)
    {   
        $serie->delete();
        /* $request->session()->flash('mensagem.sucesso', "Serie {$serie->nome} removida com sucesso"); */
        return redirect('series')
            ->with('mensagem.sucesso', "Serie {$serie->nome} removida com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')
            ->with('serie', $series);
    }


}
