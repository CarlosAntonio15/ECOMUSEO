<?php

namespace App\Http\Controllers;
use App\Expense;
use Illuminate\Http\Request;
use App\Http\Requests\ExpenseRequest;

class ExpenseController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenseC = Expense::all();
        //dd($voluntaryC);
        return view('expense')->with('expenseN', $expenseC);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$voluntary= Voluntary
        //nombre de la vista
        return view('Expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        //$ExpenseN->Id= $request->id;
        $ExpenseN->date= $request->date;
        $ExpenseN->voucher= $request->voucher;
        $ExpenseN->description= $request->description;
        $ExpenseN->responsable= $request->responsable;
        $ExpenseN->amount= $request->amount;
       

        $ExpenseN->save();
        $request->session()->flash('message', 'Egreso registrado correctamente.');
        return redirect()->route('welcome');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $id)
    {
        $expense = Expense::find($id); 
       //dd($expense);
        $expense = $expense[0];
        return view('Expenses.show')->with('Expense', $expense);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $expense = Expense::find($id);

        //dd($donation);

        if (is_null($expense)) {
            return redirect()->route('expense'); 
        }
        return view('Expenses.create')->with('expense', $expense);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::find($id)->delete();
        Session()->flash('message', 'Egreso eliminado correctamente');
        return redirect()->route('expense');
    }
}