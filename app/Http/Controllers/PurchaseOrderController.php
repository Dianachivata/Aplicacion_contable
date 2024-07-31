<?php

namespace App\Http\Controllers;

use App\Models\Purchase_order;
use App\Models\Person;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchase_order=purchase_order::all();
        return view('dashboard.purchase_order.index',['purchase_order'=> $purchase_order]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $person=Person::all();
        return view('dashboard.purchase_order.create',['person'=> $person]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $purchase_order= new purchase_order();
        $purchase_order->Code=$request->input('Code');
        $purchase_order->Name=$request->input('Name');
        $purchase_order->Sale_Price=$request->input('Sale_Price');
        $purchase_order->Stock=$request->input('Stock');
        $purchase_order->Description=$request->input('Description');
        $purchase_order->State=$request->input('State');
        $purchase_order->UserId=$request->input('person');
        $purchase_order->save();
        return view("dashboard.purchase_order.message",['msg'=>"Orden de compra creada con exito"]);
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
        $purchase_order=purchase_order::find($id);
        return view('dashboard.purchase_order.edit',
        ['purchase_order'=>$purchase_order, 'person'=>person::all()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $purchase_order=purchase_order::find($id);
        $purchase_order->Code=$request->input('Code');
        $purchase_order->Name=$request->input('Name');
        $purchase_order->Sale_Price=$request->input('Sale_Price');
        $purchase_order->Stock=$request->input('Stock');
        $purchase_order->Description=$request->input('Description');
        $purchase_order->State=$request->input('State');
        $purchase_order->UserId=$request->input('person');
        $purchase_order->save();
        return view("dashboard.purchase_order.message",['msg'=>"Orden de compra actualizada con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    $purchase_order=Purchase_order::find($id);
    $purchase_order->delete();
    return view("dashboard.purchase_order");
    }
}
