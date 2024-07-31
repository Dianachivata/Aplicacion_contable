<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Purchase_order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bill=bill::all(); 
        return view('dashboard.bill.index',['bill'=>$bill]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $purchase_order=purchase_order::all(); 
        return view('dashboard.bill.create',['purchase_order'=>$purchase_order]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bill=new bill(); 
        $bill->Receipt_number=$request->input('Receipt_number'); 
        $bill->Date=$request->input('Date'); 
        $bill->Article=$request->input('Article'); 
        $bill->Quantity=$request->input('Quantity'); 
        $bill->Price=$request->input('Price'); 
        $bill->Tax=$request->input('Tax');
        $bill->Total=$request->input('Total'); 
        $bill->ReceiptId=$request->input('purchase_order');
        $bill->save(); 

        return view("dashboard.bill.message",['msg'=>"Factura creada con exito"]);
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
        $bill=bill::find($id); 
        return view('dashboard.bill.edit',
        ['bill'=>$bill,'purchase_order'=>purchase_order::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bill=bill::find($id);  
        $bill->Receipt_number=$request->input('Receipt_number'); 
        $bill->Date=$request->input('Date'); 
        $bill->Article=$request->input('Article'); 
        $bill->Quantity=$request->input('Quantity'); 
        $bill->Price=$request->input('Price'); 
        $bill->Tax=$request->input('Tax');
        $bill->Total=$request->input('Total'); 
        $bill->ReceiptId=$request->input('purchase_order');
        $bill->save(); 

        return view("dashboard.bill.message",['msg'=>"Factura creada con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bill=Bill::find($id);
        $bill->delete();
        return redirect("dashboard/Bill");
    }
}
