<?php

namespace App\Http\Controllers;

use App\Vaga;
use App\Http\Resources\VagaResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class VagasController extends Controller
{
    public function index()
    {
        $vagas = Vaga::all();
        return VagaResource::collection($vagas);
    }

    public function search($areaAtuacao, $regiao)
    {
        //
    }

    public function create(Request $request)
    {
        $empresa = [
            'cnpj' => $request->input('empresa'),
            'desc_vaga' => $request->input('descricao'),
            'numero_vagas' => $request->input('quantidade')
        ];

        try {
            Vaga::create($empresa);
            return response()->json(['msg' => 'Vaga inserida', 'status' => 100]);
        } catch (\Exception $e) {
            Log::error('Falha ao inserir vaga: ' . $e->getMessage());
            return response()->json(['msg' => 'Falha ao inserir vaga', 'status' => 101]);
        }
    }
}
