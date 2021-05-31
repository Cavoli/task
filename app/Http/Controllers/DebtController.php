<?php


namespace App\Http\Controllers;


use App\Models\Debt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DebtController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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

    public function indebted()
    {
        $debts = DB::select('select * from debts where debts.debt > 0');
        return view('debt', ['debts' => $debts, 'layout' => 'indebted']);
    }

    public function paid()
    {
        $debts = DB::select('select * from debts where debts.debt = 0');
        return view('debt', ['debts' => $debts, 'layout' => 'paid']);
    }

    public function sortByStudent()
    {
        $debts = DB::select('select * from debts order by debts.lastName');
        return view('debt', ['debts' => $debts, 'layout' => 'studentsort']);
    }

    public function sortByPayment()
    {
        $debts = DB::select('select * from debts order by debts.payment');
        return view('debt', ['debts' => $debts, 'layout' => 'paymentsort']);
    }

    public function sortByHistory()
    {
        $debts = DB::select('select * from debts order by debts.updated_at');
        return view('debt', ['debts' => $debts, 'layout' => 'historysort']);
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
        $debt->payment = $request->input('payment');
        $debt->debt = $debt->debt - $request->input('payment');
        $debt->save();
        return redirect('/debt');
    }


    public function destroy($id)
    {
        $debt = Debt::find($id);
        $debt->delete();
        return redirect('/debt');
    }

}
