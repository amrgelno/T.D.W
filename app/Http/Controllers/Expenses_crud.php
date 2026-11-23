<?php

namespace App\Http\Controllers;
use App\Models\Expense ;

use App\Models\transaction;

use App\Models\activitylog;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Expenses_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 @$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

$payment_method=$request->payment_method;


$payment_method=$request->payment_method;


if($payment_method=='Cash'){

$transaction_type='Expenses-cash';
$notes='Expense from cash';



}elseif($payment_method=='Bank'){


$transaction_type='Expenses-Bank';
$notes='Expense from Bank';




}


transaction::create([

 'transaction_type'=>$transaction_type,
 'classify'=>$payment_method,
 'Amount'=>'-'.$request->Amount,
 'notes'=>$notes,
 'Bank_cash_id'=>$request->via,
 'Transaction_id'=>$Transaction_id,
 'Check_id'=>'0',
 'user_id'=>$Auth_UID

 ]);


  Expense::create([

    'TITLE'=>$request->Expenses_Name,
    'Amount'=>$request->Amount,
    'Notes'=>$request->Notes,
    'payment_method'=> $request->payment_method,
    'via'=>$request->via,
    'user_id'=>$Auth_UID,
    'Transaction_id'=>$Transaction_id,
                ]);



  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>'add-Expense   إضافة مصروف',

'user_id'=>$Auth_UID


   ]);


return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');






    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expense  $Expense)
    {


@$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

 $Expensesid= $Expense->id;

  $Transaction_Type='تعديل مصروف رقم';

$payment_method=$request->payment_method;

$Expenses=Expense::where("id",$Expense->id)->get();


foreach($Expenses as $Expenseitem){

$Transaction_id=$Expenseitem->Transaction_id;   // use when  $payment_method == "undefined"

}


if($payment_method != "undefined"){

if($payment_method=='Cash'){

$transaction_type='Expenses-cash';
$notes='Expense from cash';



}elseif($payment_method=='Bank'){


$transaction_type='Expenses-Bank';
$notes='Expense from Bank';




}


transaction::where('Transaction_id',$Transaction_id)->update([

 'transaction_type'=>$transaction_type,
 'classify'=>$payment_method,
 'Amount'=>'-'.$request->Amount,
 'notes'=>$notes,
 'Bank_cash_id'=>$request->via,
 'Check_id'=>'0',
 'user_id'=>$Auth_UID

 ]);




Expense::where("id",$Expense->id)->update([

    'TITLE'=>$request->Expenses_Name,
    'Amount'=>$request->Amount,
    'Notes'=>$request->Notes,
    'payment_method'=> $request->payment_method,
    'via'=>$request->via,
]);




}elseif($payment_method == "undefined"){





foreach($Expenses as $item){

$Transaction_id=$item->Transaction_id;   // use when  $payment_method == "undefined"

$payment_method=$item->payment_method;
$via=$item->via;


}


if($payment_method=='Cash'){

$transaction_type='Expenses-cash';
$notes='Expense from cash';



}elseif($payment_method=='Bank'){


$transaction_type='Expenses-Bank';
$notes='Expense from Bank';


}






transaction::where('Transaction_id',$Transaction_id)->update([

 'transaction_type'=>$transaction_type,
 'classify'=>$payment_method,
 'Amount'=>'-'.$request->Amount,
 'notes'=>$notes,
 'Bank_cash_id'=>$via,
 'Check_id'=>'0',
 'user_id'=>$Auth_UID

 ]);





Expense::where("id",$Expense->id)->update([

    'TITLE'=>$request->Expenses_Name,
    'Amount'=>$request->Amount,
    'Notes'=>$request->Notes,
    'payment_method'=> $payment_method,
    'via'=>$via,
]);

}





  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$Expensesid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);

return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Expense  $Expense)
    {

    //dd($Expense->id);


@$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

 $Expensesid= $Expense->id;

  $Transaction_Type='حذف  مصروف رقم';



$SelectedExpenseAccount=Expense::where("id",$Expense->id)->get();


foreach($SelectedExpenseAccount as $item){

$Transaction_id=$item->Transaction_id;   // use when  $payment_method == "undefined"

}


transaction::where('Transaction_id',$Transaction_id)->Delete();


Expense::where("id",$Expense->id)->Delete();


  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$Expensesid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);


return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');






    }
}
