<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $survey=survey::all();
        return view('dashboard.survey.index',['survey'=>$survey]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.survey.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $survey= new survey();
        $survey->Title=$request->input('Title');
        $survey->Description=$request->input('Description');
        $survey->State=$request->input('State');
        $survey->save();
        return view("dashboard.survey.message",['msg'=>"Encuesta agregado con exito"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $survey=survey::find($id);
        return view('dashboard.survey.edit',['survey'=>$survey]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $survey=survey::find($id);
        $survey->Title=$request->input('Title');
        $survey->Description=$request->input('Description');
        $survey->State=$request->input('State');
        $survey->save();
        return view("dashboard.survey.message",['msg'=>"Encuesta actualizada con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $survey=survey::find($id);
        $survey->delete();
        return redirect("dashboard/Survey");
    }
}
