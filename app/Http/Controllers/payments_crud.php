<?php

namespace App\Http\Controllers;

use App\Models\Payments;

use App\Models\transaction;

use App\Models\customers;

use App\Models\Receipts;

use App\Models\activitylog;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

//payment->update and delete

class payments_crud extends Controller
{


 public function destroy(Request $request,payments  $payment){

$Auth_UID=auth::guard('user')->user()->id??'';

$Finnicial_installments=$payment->F_Payments;

$oldTransaction_id=$payment->Transaction_id;

$Receipts_id=$payment->Receipts_id;

  $payment_method=$payment->payment_method;

  $via=$payment->via;

  $notes=$payment->notes;

 $Transaction_id=$Auth_UID.'-'.now();

 $Transaction_Type='حذف المدفوعات  رقم';

 $paymentid = $payment->id;



// dd('cancelled payments No:'.$oldTransaction_id);

$Receipts=Receipts::where("Check_Number",$Receipts_id)->get();

foreach($Receipts as $item){

$Receipts_Amount=$item->Amount;
$Customer_id=$item->Customer_id;
}



$customers=customers::where('id',$Customer_id)->get();

 foreach($customers as   $Balance){

 $oldBalance=$Balance->Balance;

 }



//  dd($Receipts_Amount - $Finnicial_installments);

customers::where('id',$Customer_id)->update([

'Balance'=>$oldBalance + $Finnicial_installments  ,

]);

Receipts::where("Check_Number",$Receipts_id)->update([

'Amount'=>$Receipts_Amount - $Finnicial_installments  ,

]);




transaction::create([

 'transaction_type'=>'cancelled payments No'.$oldTransaction_id,
 'Amount'=>'-'.$Finnicial_installments,
 'classify'=>$payment_method,
 'notes'=>$notes.' cancelled',
 'Bank_cash_id'=>$via,
 'Check_id'=>$Receipts_id,
 'user_id'=>$Auth_UID,
 'Transaction_id'=>$Transaction_id,


 ]);






  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$paymentid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);

// $transaction=transaction::where('Check_id',$Receipts_id)->where('Transaction_id',$oldTransaction_id)->get();

Payments::where("id",$payment->id)->where('Transaction_id',$oldTransaction_id)->Delete();


return redirect()->route('user.Dashboard')->with('paymentDeleted_success','update  sent  succefuly');


    }


}
