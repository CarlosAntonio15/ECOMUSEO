<?php
namespace App\Http\Controllers;
use App\Expense;
use Illuminate\Http\Request;
use App\Http\Requests\ExpenseRequest;
use PDF;

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

        $messages =[
            'required' => 'El campo :attribute es obligatorio ',
            'max:100' => 'El campo :attribute tiene un máximo de 100 letras',
            'min:10'  => 'El campo :attribute debe contener mínimo 10 caracteres',
            'regex:/^[\pL\s\-]+$/u' => 'El campo :attribute no puede contener números'
        ];

        $request->validate([

            "date" =>'required',
            "voucher" => 'required',
            "description" =>'required|max:100|min:10',
            "responsable" => 'required|regex:/^[\pL\s\-]+$/u|max:100',
            "amount" =>'required'
 
        ],$messages );

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

    public function createPDF(){
        $data=Expense::all();
        View()->share('expense', $data);
        $pdf=PDF::loadView('expenses.allExpense', $data);
        return $pdf->download('Expenses.pdf');
    }
    public function download($id){
        
        $expense = Expense::find($id);
        view()->share('expenses', $expense);

        return PDF::loadView('Expenses.egresoPDF', $expense)->download("date-$expense->date, voucher-$expense->voucher, description-$expense->description.pdf");
    }

    public function destroy($id)
    {
        Expense::find($id)->delete();
        Session()->flash('message', 'Egreso eliminado correctamente');
        return redirect()->route('expense');
    }

    public function graficarEgresos(){
        $expense = Expense::select(\DB::raw("COUNT(*) as count"))->whereYear('created_at', 
        date('Y'))->groupBy(\DB::raw("Month(created_at)"))->pluck('count');

        return view('Expenses.graficarEgresos', compact('expense'));

    }

}