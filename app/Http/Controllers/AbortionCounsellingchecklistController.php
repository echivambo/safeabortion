<?php

namespace App\Http\Controllers;

use App\QuestionarioDic;
use App\QuestionarioGeral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbortionCounsellingchecklistController extends Controller
{
    public function index()
    {
        $codigo =  DB::table('questionario')
            ->where('categoria', 'Abortion Counselling checklist')
            ->max('codigo');

        $abortionCounsellingchecklist=QuestionarioDic::where([
            ['categoria', 'Abortion Counselling checklist']
        ])->get();

        return view('admin.abortionCounsellingCheckList',compact(['codigo', 'abortionCounsellingchecklist']));
    }


    public function store(Request $request)
    {
        $data = $request->cabecalho;

        $questionario = QuestionarioGeral::updateOrCreate(
            [
                'franquia_id' => $data['franquia_id'],
                'data_avaliacao' => $data['data_avaliacao'],
                'questao' => $request->questao,
                'codigo' => $request->codigo,
                'categoria' => $request->categoria
            ],
            [
                'franquia_id' => $data['franquia_id'],
                'data_avaliacao' => $data['data_avaliacao'],
                'questao' => $request->questao,
                'resposta' => $request->resposta,
                'codigo' => $request->codigo,
                'categoria' => $request->categoria,
                'user_id' => $data['user_id']
            ]
        );
        return $questionario;
    }
}
