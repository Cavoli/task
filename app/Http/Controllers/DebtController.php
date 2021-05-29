<?php


namespace App\Http\Controllers;


use App\Models\Debt;
use Illuminate\Http\Request;

class DebtController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $debts = Debt::all();
        return view('debt', ['debts' => $debts, 'layout' => 'index']);
    }

    public function create()
    {
        $debts = Debt::all();
        return view('debt', ['debts' => $debts, 'layout' => 'create']);
    }

    public function store(Request $request)
    {
        $debt = new Debt();
        $debt->firstName = $request->input('firstName');
        $debt->lastName = $request->input('lastName');
        $debt->debt = $request->input('debt');
        $debt->save();
        return redirect('/debt');
    }

    public function show($id)
    {
        $debt = Debt::find($id);
        $debts = Debt::all();
        return view('debt', ['debts' => $debts, 'debt' => $debts,
            'layout' => 'show']);
    }

    public function edit($id)
    {
        $debt = Debt::find($id);
        $debts = Debt::all();
        return view('debt', ['debts' => $debts, 'debt' => $debt,
            'layout' => 'edit']);
    }

    public function update(Request $request, $id)
    {
        $debt = Debt::find($id);
        $debt->firstName = $request->input('firstName');
        $debt->lastName = $request->input('lastName');
        $debt->debt = $debt->debt - $request->input('debt');
        $debt->payment = $request->input('payment');
        $debt->save();
        return redirect('/debt');
    }

//    public function update(Request $request, $id){
//
//        $studentDebt = DebtController::find($id);
//        $studentDebt -> firstName = $request ->input('firstName');
//        $studentDebt -> lastName = $request -> input('lastName');
//        $studentDebt -> debt = $request -> input('debt');
//        $studentDebt -> save();
//        return redirect('/');
//    }

    public function destroy($id)
    {
        $debt = Debt::find($id);
        $debt->delete();
        return redirect('/debt');
    }

}
