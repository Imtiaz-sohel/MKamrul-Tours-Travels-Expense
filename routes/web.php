<?php

use App\Http\Controllers\BalanceController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('login');
});

// Route::get('/dashboard', function () {
//   return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
// income controller starts
Route::get('/all-income', [IncomeController::class, 'incomeList'])->name('IncomeList');
Route::get('/add-income', [IncomeController::class, 'addIncome'])->name('AddIncome');
Route::get('/edit-income/{income_id}', [IncomeController::class, 'editIncome'])->name('EditIncome');
Route::get('/delete-income/{income_id}', [IncomeController::class, 'deleteIncome'])->name('DeleteIncome');
Route::post('/update-income/', [IncomeController::class, 'updateIncomePost'])->name('updateIncomePost');
Route::post('/add-income-post', [IncomeController::class, 'addIncomePost'])->name('addIncomePost');
// expence controller starts
Route::get('/expense-list',[ExpenseController::class,'expenseList'])->name('allExpenseList');
Route::get('/add-expense-list',[ExpenseController::class,'addExpenseList'])->name('addExpenseList');
Route::get('/delete-expense-list',[ExpenseController::class,'expenseDelete'])->name('expenseDelete');
Route::post('/add-expense-list-post',[ExpenseController::class,'addExpenseListPost'])->name('addExpenseListPost');
// balance controller starts
Route::get('/balance-list',[BalanceController::class,'allBalance'])->name('Balance');
});
