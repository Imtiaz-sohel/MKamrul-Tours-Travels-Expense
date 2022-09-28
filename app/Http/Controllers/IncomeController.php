<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller{
    function incomeList(){
        $allIncomes = Income::all();
        return view('all-income',compact('allIncomes'));
    }
    function addIncome(){
        $allMonths = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];
        return view('crud-income',compact('allMonths'));
    }

    function addIncomePost(Request $request){
        $request->validate([
            'total_ticket_sell'=>['required'],
            'selling_amount'=>['required'],
            'profit_amount'=>['required'],
        ],[
            'total_ticket_sell.required'=>'Please Enter Total Ticket Sell',
            'selling_amount.required'=>'Please Enter Total Sell',
            'profit_amount.required'=>'Please Enter Total Profit',
        ]);
        $data = $request->except(['_token']);
        Income::create($data);
        return back()->with('income_inset_message','Income Inserted Successfully');
    }

    function editIncome($id){
        $allMonths = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];
        $income_edit=Income::findOrFail($id);
       return view('income-edit',compact('allMonths','income_edit'));
    }

    function updateIncomePost(Request $request){
        $request->validate([
            'total_ticket_sell'=>['required'],
            'selling_amount'=>['required'],
            'profit_amount'=>['required'],
        ],[
            'total_ticket_sell.required'=>'Please Enter Total Ticket Sell',
            'selling_amount.required'=>'Please Enter Total Sell',
            'profit_amount.required'=>'Please Enter Total Profit',
        ]);
        $income_update=Income::findOrFail($request->income_id);
        $income_update->current_month=$request->current_month;
        $income_update->income_sourse=$request->income_sourse;
        $income_update->total_ticket_sell=$request->total_ticket_sell;
        $income_update->selling_amount=$request->selling_amount;
        $income_update->profit_amount=$request->profit_amount;
        $income_update->save();
        return back()->with('income_update_message','Income Updated Successfully');
    }

    function deleteIncome($id){
        Income::findOrFail($id)->delete();
        return back()->with('income_delete_message','Income Deleted Successfully');
    }






















}

