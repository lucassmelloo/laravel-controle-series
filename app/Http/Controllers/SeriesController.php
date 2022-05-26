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

        Serie::create($request->all());
 
        return redirect('series')
            ->with('mensagem.sucesso', "Serie {$request->nome} criada com sucesso");

    }

    public function destroy(Serie $series)
    {   
        $series->delete();
        return redirect('series')
            ->with('mensagem.sucesso', "Serie {$series->nome} removida com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')
            ->with('serie', $series);
    }

    public function update(Serie $series, Request $request)
    {
        $series->nome = $request->nome;
        $series->save();

        return redirect('series')
            ->with('mensagem.sucesso', "Série {$series->nome} atualizada com sucesso");
    }


    public function apiSeries( $id, Request $request)
    {
        $series = Serie::query()->where('id',$id)->first();
        $mensagemSucesso = session('mensagem.sucesso');
        return response()->json($series);
    }
}