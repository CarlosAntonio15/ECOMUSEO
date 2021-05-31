<?php

namespace App\Http\Controllers;

use App\Income;
use Illuminate\Http\Request;
use App\Http\Requests\IncomeRequest;


class IncomeController extends Controller
{

    public function index()
    {
        $incomeC = Income::all();
        return view('income')->with('incomeN', $income);
    
    }

    public function create()
    {
        return view('Inc.create');
    }

    public function store(IncomeRequest $request)
    {
        $IncomeN= new Income();
        $IncomeN->description= $request->description;
        $IncomeN->quantity= $request->quantity;
        $IncomeN->incomeDate= $request->incomeDate;
        $IncomeN->save;
        return redirect()->route('welcome');
    }

    public function show(Income $id)
    {
        $IncomeB = Income::find($id); 
        return view('Income.show',compact('IncomeB'));
    }

    public function edit(Income $id)
    {

    $IncomeE = Income::find($id);
    return view('Income.edit', compact('IncomeE'));
    }

    public function update(Request $request, Income $id)
    {
        $IncomeU= Income::find($id);
        $IncomeU->id= $request->id;
        $IncomeU->description= $request->description;
        $IncomeU->quantity= $request->quantity;
        $IncomeU->incomeDate= $request->incomeDate;
        $IncomeU->save;
        return redirect()->route('Income.index');
    }

    public function destroy(Income $id)
    {
        $incomeE = Income::find($id); $IncomeE->delete();
    }


}
