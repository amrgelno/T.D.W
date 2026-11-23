<?php

namespace App\Http\Controllers;

use App\Models\bank;

use App\Models\activitylog;

use App\Models\transaction;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Bank_mangement_crud extends Controller
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

$banksAccount=bank::where('account_Number','B-'.$request->Bank_account_Number)->get();

$countbanksAccount=count($banksAccount);

if($countbanksAccount==0){


 transaction::create([

'transaction_type'=>'Bank-Deposit',
'classify'=>'Bank',
 'Amount'=>$request->First_Balance,
 'notes'=>'FirstBalance',
 'Bank_cash_id'=>'B-'.$request->Bank_account_Number,
 'Transaction_id'=>$Transaction_id,
 'Check_id'=>'0',
 'user_id'=>$Auth_UID

 ]);



  bank::create([

    'Name'=>$request->Name,
    'account_Number'=>'B-'.$request->Bank_account_Number,
    'Currency'=>$request->Currency,
    'Notes'=>$request->Notes,
    'First_Balance'=>$request->First_Balance,
    'Transaction_id'=>$Transaction_id,
    'user_id'=>$Auth_UID
                ]);



  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>'add-BankAccount   إضافة حساب بنكي',

'user_id'=>$Auth_UID


   ]);


  return redirect()->route('user.Dashboard')->with('Bank add-success','Good  Data confirmed');


}else{

   return redirect()->route('user.Dashboard')->with('Bank add-failed','error duplicated  Bank account You Need to change it !');

}


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
    public function update(Request $request,bank  $Bank)
    {

@$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

 $Bankid= $Bank->id;

  $Transaction_Type='تحديث بيانات الحساب البنكي  رقم';

$SelectedBankAccount=bank::where("id",$Bank->id)->get();


foreach($SelectedBankAccount as $item){


$BankAccount=$item->account_Number;


}

transaction::where("Bank_cash_id",$BankAccount)->where("transaction_type","Bank-Deposit")->update([

'transaction_type'=>'Bank-Deposit',
 'Amount'=>$request->First_Balance,
'classify'=>'Bank',
 'notes'=>'FirstBalance',
 'Bank_cash_id'=>'B-'.$request->Bank_account_Number,
 'Transaction_id'=>$Transaction_id,
 'Check_id'=>'0',
 'user_id'=>$Auth_UID



]);



bank::where("id",$Bank->id)->update([

    'Name'=>$request->Name,
    'account_Number'=>'B-'.$request->Bank_account_Number,
    'Currency'=>$request->Currency,
    'Notes'=>$request->Notes,
    'First_Balance'=>$request->First_Balance,

]);


  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$Bankid.$Transaction_Type,

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
    public function destroy(Request $request,bank  $Bank)
    {


@$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

 $Bankid= $Bank->id;

  $Transaction_Type='حذف  الحساب البنكي رقم';

$SelectedBankAccount=bank::where("id",$Bank->id)->get();


foreach($SelectedBankAccount as $item){


$BankAccount=$item->account_Number;


}

transaction::where("Bank_cash_id",$BankAccount)->where("transaction_type","Bank-Deposit")->Delete();

bank::where("id",$Bank->id)->Delete();


  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$Bankid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);


return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');
    }
}
