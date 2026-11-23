<?php

namespace App\Http\Controllers;

use App\Models\cash ;

use App\Models\activitylog;

use App\Models\transaction;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class cash_mangement_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



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


$cashAccount=cash::where('account_Number','C-'.$request->cash_account_Number)->get();



// dd($cashAccount);
$countcashAccount=count($cashAccount);

if($countcashAccount==0){


 transaction::create([

 'transaction_type'=>'Cash-Deposit',
 'classify'=>'Cash',
 'Amount'=>$request->First_Balance,
 'notes'=>'FirstBalance',
 'Bank_cash_id'=>'C-'.$request->cash_account_Number,
 'Transaction_id'=>$Transaction_id,
 'Check_id'=>'0',
 'user_id'=>$Auth_UID

 ]);



  cash::create([

    'cash_type'=>$request->cash_Name,
    'account_Number'=>'C-'.$request->cash_account_Number,
    'First_Balance'=>$request->First_Balance,
    'Notes'=>$request->Notes,
    'Transaction_id'=>$Transaction_id,
    'user_id'=>$Auth_UID
                ]);



  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>'add-CashAccount   إضافة حساب نقدي',

'user_id'=>$Auth_UID


   ]);

   return redirect()->route('user.Dashboard')->with('cash add-success','Good  Data confirmed');

}else{
   return redirect()->route('user.Dashboard')->with('cash add-failed','error duplicated  cash account You Need to change it !');
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
    public function update(Request $request,cash  $cash)
    {

@$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

 $cashid= $cash->id;

  $Transaction_Type='تحديث بيانات حساب نقدي رقم';


$SelectedCashAccount=cash::where("id",$cash->id)->get();


foreach($SelectedCashAccount as $item){


$CashAccount=$item->account_Number;


}


transaction::where("Bank_cash_id",$CashAccount)->where("transaction_type","Cash-Deposit")->update([

 'transaction_type'=>'Cash-Deposit',
 'Amount'=>$request->First_Balance,
 'notes'=>'FirstBalance',
 'Bank_cash_id'=>'C-'.$request->cash_account_Number,
 'Transaction_id'=>$Transaction_id,
 'Check_id'=>'0',
 'user_id'=>$Auth_UID

 ]);




cash::where("id",$cash->id)->update([

    'cash_type'=>$request->cash_Name,
    'account_Number'=>'C-'.$request->cash_account_Number,
    'First_Balance'=>$request->First_Balance,
    'Notes'=>$request->Notes,
]);


  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$cashid.$Transaction_Type,

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
    public function destroy(Request $request,cash  $cash)
    {


@$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

 $cashid= $cash->id;

  $Transaction_Type='حذف  حساب نقدي رقم';

$SelectedCashAccount=cash::where("id",$cash->id)->get();


foreach($SelectedCashAccount as $item){


$CashAccount=$item->account_Number;


}

// dd($CashAccount);

cash::where("id",$cash->id)->Delete();

transaction::where("Bank_cash_id",$CashAccount)->where("transaction_type","Cash-Deposit")->Delete();

  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$cashid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);


return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');
    }
}
