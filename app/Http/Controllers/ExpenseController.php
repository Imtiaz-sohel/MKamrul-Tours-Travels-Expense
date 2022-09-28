<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Expenses;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpenseController extends Controller{
    function expenseList(){
        $user_info = Expenses::get()->groupBy(function($val) {
            return Carbon::parse($val->current_month)->format('F');
        });
        return view('expense-list', compact('user_info'));
    }

    function addExpenseList(){
        $allMonths = ['January','February','March','April','May','June','July','August','September','Octomber','November','December'];
        $allExpenses = ['Empoyee Salary','Office Rent','Water Bill','Internet Bill','Electricity Bill','Entainment Cost','Office Cleaning Cost','Stationary Expenses','Fixed Asset Diffenciation Cost','Miscellaneous'];
        return view('add-expense',compact('allExpenses','allMonths'));
    }

    function addExpenseListPost(Request $request){
        $request->validate([
            'current_month'=>['required'],
            'expense_field'=>['required'],
            'expense_amount'=>['required']
        ],[
            'expense_amount.required'=>'Please Select Current Month',
            'expense_field.required'=>'Please Select Expenses Filed',
            'expense_amount.required'=>'Please Enter Expense Amount',
        ]);
        $data = $request->except(['_token']);
        Expenses::create($data);
        return back()->with('expense_inset_message','Expense Inserted Successfully');
    }



















}
