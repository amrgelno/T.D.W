<?php

namespace App\Http\Controllers;

use App\Models\Receipts;

use App\Models\transaction;

use App\Models\activitylog;

use App\Models\books;

use App\Models\Payments;

use  App\Models\company;

use App\Models\customers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class Receipts_crud extends Controller
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
    public function store(Request $request){


$Receipts_Number=Receipts::where('Check_Number',$request->Check_Number)->get();

$countReceiptsNumber=count($Receipts_Number);

if($countReceiptsNumber == '0'){

@$Auth_UID=auth::guard('user')->user()->id??'';
$Transaction_id=$Auth_UID.'-'.now();


$customers=customers::where('id',$request->Customer_id)->get();

 foreach($customers as   $Balance){

 $oldBalance=$Balance->Balance;

 }


$Discount=$request->Discount;

$Amount_paid=$request->Amount;

$Netamountpaid=$Amount_paid-$Discount;

customers::where('id',$request->Customer_id)->update([

'Balance'=>$oldBalance-$Amount_paid,


]);


if(($oldBalance-$Amount_paid)=='0'){

$status='close';

}else{

$status='open';

}

$payment_method=$request->payment_method;

if($payment_method=='Cash'){

$transaction_type='Receipts-cash';
$notes='Receipts to cash';



}elseif($payment_method=='Bank'){


$transaction_type='Receipts-Bank';
$notes='Receipts to Bank';


}


$trip_Booked=books::where("Customer_id",$request->Customer_id)->get();


 foreach($trip_Booked as   $item){

 $triptype=$item->triptype;

 }

$packages_id= $triptype;


transaction::create([

 'transaction_type'=>$transaction_type,
 'classify'=>$payment_method,
 'Amount'=>'+'.$Netamountpaid,
 'notes'=>$notes,
 'Bank_cash_id'=>$request->via,
 'Transaction_id'=>$Transaction_id,
 'Check_id'=>$request->Check_Number,
 'user_id'=>$Auth_UID

 ]);


Payments::create([
'F_Payments'=>'+'.$request->Amount,
'payment_method'=>$request->payment_method,
'notes'=>'First_payment',
'via'=>$request->via,
'Receipts_id'=>$request->Check_Number,
'Transaction_id'=>$Transaction_id,
'user_id'=>$Auth_UID
 ]);


  Receipts::create([

    'Check_Number'=>$request->Check_Number,
    'Check_date'=>$request->Check_date,
    'Amount'=>'+'.$request->Amount,
    'Discount'=>$Discount,
    'payment_method'=>$request->payment_method,
    'Receipt_Source'=>$request->Receipt_Source,
    'via'=>$request->via,
    'status'=>$status,
    'classify'=>'individual_Client-Receipt- أيصال عميل فردي',
    'Transaction_id'=>$Transaction_id,
    'Customer_id'=>$request->Customer_id,
    'receiptsholders_id'=>'0',
    'salesreps_id'=>'0',
    'Bank_cash_id'=>$request->via,
    'user_id'=>$Auth_UID,
    'packages_id'=>$packages_id

                ]);



  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>'add-Receipts   تسجيل أيصال جديد',

'user_id'=>$Auth_UID


   ]);




$customerslink=customers::where('id',$request->Customer_id)->get();


 foreach($customerslink as   $close){

 $closeBalance=$close->Balance;

 }



 if($closeBalance=='0'){



Receipts::where('Customer_id',$request->Customer_id)->update([


'status'=>'close'

]);



 }


return redirect()->route('user.Dashboard')->with('Receiptssuccess','Good  Data confirmed');


}else{

return redirect()->route('user.Dashboard')->with('Receiptsfaild','error duplicated  value Receipt You Need to change it !');


}


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function show(Request $request,Receipts  $Receipt){


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Receipts  $Receipt)
    {


$company=company::get(); 
$Receipt=Receipts::where("id",$Receipt->id)->get();
foreach($Receipt as $item  ){

$Customer_id=$item->Customer_id;
$ReceiptStatus=$item->status;

}

$trip_Booked=books::where("Customer_id",$Customer_id)->get();

return view('Admin.Auth.Accounting_transactions_Management.Receipts.print',compact('Receipt','trip_Booked','company'),);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Receipts  $Receipt)
    {


// $Receipts_Number=Receipts::where('Check_Number',$request->Check_Number)->get();

// $countReceiptsNumber=count($Receipts_Number);

// if($countReceiptsNumber == '0'){


@$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

 $Receiptid= $Receipt->id;

  $Transaction_Type='تعديل أيصال  رقم';

$Transaction_id= $Receipt->Transaction_id;   // use when  $payment_method == "undefined"
$Check_Number= $Receipt->Check_Number;
$oldAmount_paid= $Receipt->Amount;
$Customer_id= $Receipt->Customer_id;
$via=$request->via??$Receipt->via;
$status=$Receipt->status;

if($request->payment_method == "undefined"){

$payment_method=$Receipt->payment_method;
}else{


$payment_method=$request->payment_method;

}


if($Customer_id==$request->Customer_id){

$customers=customers::where('id',$request->Customer_id)->get();

 foreach($customers as   $Balance){

 $oldBalance=$Balance->Balance;

 }


$NewAmount_paid=$request->Amount;


customers::where('id',$request->Customer_id)->update([

'Balance'=>$oldBalance-$NewAmount_paid,


]);


if(($oldBalance-$NewAmount_paid)=='0'){

$status='close';

}elseif(($oldBalance-$NewAmount_paid)>'0'){

$status='open';

}



$customerslink=customers::where('id',$request->Customer_id)->get();


 foreach($customerslink as   $close){

 $closeBalance=$close->Balance;

 }



 if($closeBalance=='0'){



Receipts::where('Customer_id',$request->Customer_id)->update([


'status'=>'close'

]);



 }

}else{

//return old client to old Balance

$customers=customers::where('id',$Customer_id)->get();

 foreach($customers as   $Balance){

 $oldBalance=$Balance->Balance;

 }

// dd($oldBalance+$oldAmount_paid);

customers::where('id',$Customer_id)->update([

'Balance'=>$oldBalance+$oldAmount_paid,


]);



// convert Receipt to new customer

$NewAmount_paid=$request->Amount;


if($oldBalance<=$NewAmount_paid){

$status='close';

}elseif($oldBalance>$NewAmount_paid){

$status='open';

}


$customers=customers::where('id',$request->Customer_id)->get();

 foreach($customers as   $Balance){

 $oldBalance=$Balance->Balance;

 }



// dd($oldBalance-$Amount_paid);
customers::where('id',$request->Customer_id)->update([

'Balance'=>$oldBalance-($NewAmount_paid+$oldAmount_paid),


]);






$customerslink=customers::where('id',$request->Customer_id)->get();


 foreach($customerslink as   $close){

 $closeBalance=$close->Balance;

 }



 if($closeBalance=='0'){



Receipts::where('Customer_id',$Customer_id)->update([


'status'=>'close'

]);



 }




}



$trip_Booked=books::where("Customer_id",$request->Customer_id)->get();


 foreach($trip_Booked as   $item){

 $triptype=$item->triptype;

 }

$packages_id= $triptype;


// if($status=='close'){


// $packages_id= $triptype;


// }elseif($status=='open'){


// $packages_id='0';


// }


Payments::create([
'F_Payments'=>'+'.$request->Amount,
'payment_method'=>$payment_method,
'notes'=>'payment on'.now(),
 'via'=>$via,
'Receipts_id'=>$request->Check_Number,
'user_id'=>$Auth_UID,
'Transaction_id'=>$Transaction_id,
 ]);





Receipts::where("id",$Receipt->id)->update([


    'Check_Number'=>$request->Check_Number,
    'Check_date'=>$request->Check_date,
    'Amount'=>$oldAmount_paid+$NewAmount_paid,
    'payment_method'=>$payment_method,
    'via'=>$via,
    'status'=>$status,
    'Receipt_Source'=>$request->Receipt_Source,
    'Customer_id'=>$request->Customer_id,
    'Bank_cash_id'=>$via,
    'user_id'=>$Auth_UID,
    'packages_id'=>$packages_id


]);




if($request->payment_method != "undefined"){



if($request->payment_method=='Cash'){

$transaction_type='Receipts-cash';
$notes='Receipts to cash';



}elseif($request->payment_method=='Bank'){


$transaction_type='Receipts-Bank';
$notes='Receipts to Bank';

}





transaction::create([

 'transaction_type'=>$transaction_type,
 'Amount'=>$NewAmount_paid,
 'classify'=>$payment_method,
 'notes'=>$notes,
 'Bank_cash_id'=>$via,
 'Check_id'=>$request->Check_Number,
 'user_id'=>$Auth_UID,
'Transaction_id'=>$Transaction_id

 ]);


}elseif($request->payment_method == "undefined"){



$transaction=transaction::where('Check_id',$Check_Number)->get();
foreach($transaction as $transactionitem ){

$transaction_type=$transactionitem->transaction_type;
$notes=$transactionitem->notes;



}





transaction::create([

 'transaction_type'=>$transaction_type,
 'Amount'=>$NewAmount_paid,
 'classify'=>$payment_method,
 'notes'=>$notes,
 'Bank_cash_id'=>$via,
 'Check_id'=>$request->Check_Number,
 'user_id'=>$Auth_UID,
 'Transaction_id'=>$Transaction_id,


 ]);



 Receipts::where("id",$Receipt->id)->update([


   'Check_Number'=>$request->Check_Number,
    'Check_date'=>$request->Check_date,
    'Amount'=>$oldAmount_paid+$NewAmount_paid,
    'payment_method'=>$payment_method,
     'via'=>$via,
     'status'=>$status,
    'Receipt_Source'=>$request->Receipt_Source,
    'Customer_id'=>$request->Customer_id,
    'Bank_cash_id'=>$via,
    'user_id'=>$Auth_UID,
    'packages_id'=>$packages_id,
    'Transaction_id'=>$Transaction_id,



]);


}


// if($countReceipts==0){



  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$Receiptid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);

// }else{


// echo "رقم أيصال مكرر";


// }
// }

return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Receipts  $Receipt)
    {
       @$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

 $Receiptid= $Receipt->id;

  $Transaction_Type='حذف أيصال  رقم';



// dd($Receipt->Check_Number);

// dd($SelectedReceiptsAccount);

$Check_Number=$Receipt->Check_Number;
$Transaction_id=$Receipt->Transaction_id;   // use when  $payment_method == "undefined"
$Customer_id=$Receipt->Customer_id;
$oldAmount_paid=$Receipt->Amount;


// dd($oldAmount_paid);

$customers=customers::where('id',$Customer_id)->get();

 foreach($customers as   $Balance){

 $oldBalance=$Balance->Balance;

 }

// dd($oldBalance+$oldAmount_paid);

customers::where('id',$Customer_id)->update([

'Balance'=>$oldBalance+$oldAmount_paid,


]);



transaction::where('Check_id',$Check_Number)->where('Transaction_id',$Transaction_id)->Delete();

Receipts::where("id",$Receipt->id)->Delete();


Payments::where("Receipts_id",$Check_Number)->Delete();



  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$Receiptid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);


return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');

    }
}
