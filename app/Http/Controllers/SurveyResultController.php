<?php

namespace App\Http\Controllers;

use App\Models\Survey_result;
use App\Models\Survey;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $survey_result=survey_result::all();
        return view('dashboard.survey_result.index',['survey_result'=>$survey_result]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.survey_result.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $survey_result= new survey();
        $survey_result->DateofResponse=$request->input('DateofResponse');
        $survey_result->respuesta1=$request->input('respuesta1');
        $survey_result->respuesta2=$request->input('respuesta2');
        $survey_result->respuesta3=$request->input('respuesta3');
        $survey_result->SurveyId=$request->input('survey');
        $survey_result->save();
        return view("dashboard.survey_result.message",['msg'=>"Resultado agregado con exito"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey_result $survey_result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $survey_result=survey_result::find($id);
        return view('dashboard.survey_result.edit',
        ['survey_result'=>$survey_result, 'survey'=>survey::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $survey_result=survey_result::find($id);
        $survey_result->DateofResponse=$request->input('DateofResponse');
        $survey_result->respuesta1=$request->input('respuesta1');
        $survey_result->respuesta2=$request->input('respuesta2');
        $survey_result->respuesta3=$request->input('respuesta3');
        $survey_result->SurveyId=$request->input('survey');
        $survey_result->save();
        return view("dashboard.survey_result.message",['msg'=>"Resultado actualizado con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $survey_result=Survey_result::find($id);
        $survey_result->delete();
        return redirect("dashboard/Survey_result");
    }
}
