<?php
namespace App\Http\Controllers;
use App\Expense;
use Illuminate\Http\Request;
use App\Http\Requests\ExpenseRequest;

class ExpenseController extends Controller
{
    
    public function index()
    {
        $expenseC = Expense::all();
        return view('Expenses.index')->with('expenseN', $expenseC);
    }

    public function create()
    {
        return view('Expenses.create');
    }

    public function store(ExpenseRequest $request)
    {

        $request->validate([

            "date" =>'required',
            "voucher" => 'required',
            "description" =>'required|max:50',
            "responsable" => 'required|string|max:100',
            "amount" =>'required'
 
        ]);

        $ExpenseN= new expense;
        $ExpenseN->date= $request->date;
        $ExpenseN->voucher= $request->voucher;
        $ExpenseN->description= $request->description;
        $ExpenseN->responsable= $request->responsable;
        $ExpenseN->amount= $request->amount;
        $ExpenseN->save();
        $request->session()->flash('message', 'Egreso registrado correctamente.');
        return redirect()->route('expense.index');
    }

    public function show(Expense $id)
    {
        $expense = Expense::find($id); 
        $expense = $expense[0];
        return view('Expenses.show')->with('Expense', $expense);
    }

    public function edit($id)
    {

        $expense = Expense::find($id);
        if (is_null($expense)) {
            return redirect()->route('expense'); 
        }
        return view('Expenses.create')->with('expense', $expense);
    }

    public function update(ExpenseRequest $request,$id)
    {
        $Expense= Expense::find($id);
        $Expense->date= $request->date;
        $Expense->voucher= $request->voucher;
        $Expense->description= $request->description;
        $Expense->responsable= $request->responsable;
        $Expense->amount= $request->amount;
        $Expense->save();
        $request->session()->flash('message', 'Egreso actualizada correctamente.');
        return redirect()->route('expense');
    }

    public function destroy($id)
    {
        Expense::find($id)->delete();
        Session()->flash('message', 'Egreso eliminado correctamente');
        return redirect()->route('expense');
    }
}