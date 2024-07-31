<?php

namespace App\Http\Controllers;

use App\Models\Financial_statement;
use App\Models\Purchase_order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinancialStatementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $financial_statement=financial_statement::all(); 
        return view('dashboard.financial_statement.index',['financial_statement'=>$financial_statement]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $purchase_order=purchase_order::all(); 
        return view('dashboard.financial_statement.create',['purchase_order'=>$purchase_order]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $financial_statement=new financial_statement(); 
        $financial_statement->Date=$request->input('Date'); 
        $financial_statement->Incomes=$request->input('Incomes'); 
        $financial_statement->Expenses=$request->input('Expenses'); 
        $financial_statement->Utilities=$request->input('Utilities'); 
        $financial_statement->Description=$request->input('Description'); 
        $financial_statement->ReceiptId=$request->input('purchase_order'); 
        $financial_statement->save(); 

        return view("dashboard.financial_statement.message",['msg'=>"Balance financiero creado con exito"]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $financial_statement=financial_statement::find($id); 
        return view('dashboard.financial_statement.edit',
        ['financial_statement'=>$financial_statement,'purchase_order'=>purchase_order::all()]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $financial_statement=financial_statement::find($id); 
        $financial_statement->Date=$request->input('Date'); 
        $financial_statement->Incomes=$request->input('Incomes'); 
        $financial_statement->Expenses=$request->input('Expenses'); 
        $financial_statement->Utilities=$request->input('Utilities'); 
        $financial_statement->Description=$request->input('Description'); 
        $financial_statement->ReceiptId=$request->input('purchase_order'); 
        $financial_statement->save(); 

        return view("dashboard.financial_statement.message",['msg'=>"Articulo Actualizado con exito"]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $financial_Statement=financial_statement::find($id); 
        $financial_Statement->delete(); 
        return redirect("dashboard/financial_statement"); 
    }
}
