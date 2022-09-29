<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Expenses;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
  function expenseList()
  {
    $expense = Expenses::get()->groupBy('current_month');
    return view('expense-list', compact('expense'));
  }
  function addExpenseList()
  {
    $allMonths = ['January', 'February', 'April', 'May', 'June', 'July', 'August', 'September', 'Octomber', 'November', 'December'];
    $allExpenses = ['Empoyee Salary', 'Office Rent', 'Water Bill', 'Internet Bill', 'Electricity Bill', 'Entainment Cost', 'Office Cleaning Cost', 'Stationary Expenses', 'Fixed Asset Diffenciation Cost', 'Miscellaneous'];
    return view('add-expense', compact('allExpenses', 'allMonths'));
  }

  function addExpenseListPost(Request $request)
  {
    $request->validate([
      'current_month' => ['required'],
      'expense_field' => ['required'],
      'expense_amount' => ['required']
    ], [
      'expense_amount.required' => 'Please Select Current Month',
      'expense_field.required' => 'Please Select Expenses Filed',
      'expense_amount.required' => 'Please Enter Expense Amount',
    ]);
    $data = $request->except(['_token']);
    Expenses::create($data);
    return back()->with('expense_inset_message', 'Expense Inserted Successfully');
  }

  public function expenseDelete(Expenses $expense)
  {
    $expense->delete();
    return back();
  }
}
