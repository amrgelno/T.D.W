<?php

namespace App\Http\Controllers;
use App\Models\customers ;
use App\Models\books;
use App\Models\selesreps;
use App\Models\TripPrice;
use App\Models\activitylog ;
use App\Http\Traits\UploadImg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class customers_crud extends Controller
{


    // public function __construct(){

    //     $this->middleware('auth');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        echo'Right Route';
    }

  /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\customers
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits
    public function create(Request $request)
    {





    }

    /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\customers
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

 //USE UploadImg;   //  use Traits

    public function store(Request $request){

 $customers=customers::where('phone',$request->phone)->where('classify','individual_Client')->get();

   $tripprice=TripPrice::where('packages_id',$request->triptype)->get();

$selesreps=selesreps::where('id',$request->salesrep_id)->get();


   if($request['add-Group_Client']){

@$classify='Group_Client';

foreach($selesreps as $selesrep){

$cLientname=$selesrep->Name;
@$phone=$selesrep->phone;
@$Address=$selesrep->Address;

}

   }elseif($request['add-individual_Client']){

@$classify='individual_Client';
@$cLientname=$request->Name;
@$phone=$request->phone;
@$Address=$request->Address;

   }

    foreach($tripprice as   $item){

 $trip_price=$item->Total_price;

 }


$countcustomers=count($customers);



if($countcustomers==0){

        @$email=$request->Email??'';

        @$Status=$request->status;
        @$passport_num=$request->passport_num;
        @$Client_source=$request->Client_source;
        @$booking_method=$request->Booking_method;
        @$salesrep_id=$request->salesrep_id;
        @$Notes=$request->Notes;
        @$Auth_UID=auth::guard('user')->user()->id??'';





// dd($countcustomers);
$Transaction_id=$Auth_UID.'-'.now();



  customers::create([

    'Name'=>$cLientname,
    'Client_source'=> $Client_source,
    'booking_method'=> $booking_method,
    'email'=> $email,
    'phone'=>$phone,
    'classify' =>$classify,
    'status'=> $Status,
    'Address'=> $Address,
    'passport_num'=>$passport_num,
    'notes'=> $Notes,
    'user_id'=>$Auth_UID,
    'salesrep_id'=>$salesrep_id,
    'Transaction_id'=>$Transaction_id,
                ]);



  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>'add-customer   إضافة عميل',

'user_id'=>$Auth_UID


   ]);





  books::create([

'triptype'=>$request->triptype??'undefined',
'travelDate'=>$request->travelDate??'2026-07-22 00:00:00',
'ReturnDate'=>$request->ReturnDate??'2026-07-22 00:00:00',
'hotel_level'=>$request->hotel_level??'undefined',
'numbers_of_Travelers'=>$request->Number_of_travelers??'0',
'Ways_of_Travel'=>$request->Ways_of_Travel??'undefined',
'notes'=>$request->Notes,
'user_id'=>$Auth_UID,
'Transaction_id'=>$Transaction_id,


 ]);




$customer=customers::where('Transaction_id',$Transaction_id)->get();


foreach($customer as   $item){


$currentcustomer=$item->id;


}


books::where('Transaction_id',$Transaction_id)->update([

'Customer_id'=>$currentcustomer,


]);



if($Status=='Booked_Clients'){

 $clientbook=books::where('Customer_id',$currentcustomer)->get();

 foreach($clientbook as   $item){

 $numbers_of_Travelers=$item->numbers_of_Travelers;

 }




customers::where('id',$currentcustomer)->update([

'Balance'=>$trip_price*$numbers_of_Travelers,


]);
}



$mssg="Good  Data confirmed";

return redirect()->route('user.Dashboard')->with('success',$mssg);
}else{


$mssg="error duplicated  value email You Need to change it !";
return redirect()->route('user.Dashboard')->with('failed',$mssg);


}



            }



    /**
     * Display the specified resource.
     * @param  int  $id
     * @param  \App\Models\customers
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,customers $customers)
    {




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {




    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customers
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,customers $customer)
    {


        @$cLientname=$request->Name;
        @$email=$request->Email;
        @$phone=$request->phone;
        @$Status=$request->status;
        @$passport_num=$request->passport_num;
        @$Client_source=$request->Client_source;
        @$booking_method=$request->Booking_method;
        @$Notes=$request->Notes;
        @$Address=$request->Address;
        @$Auth_UID=auth::guard('user')->user()->id??'';

        @$Transaction_id=$Auth_UID.'-'.now();

         $Transaction_Type='تحديث بيانات عميل رقم ';

         @$customerid= $customer->id;
         @$salesrep_id=$request->salesrep_id??'';




$tripprice=TripPrice::where('packages_id',$request->triptype)->get();


if(count($tripprice) == 0){
 $trip_price=Null;
  $numbers_of_Travelers=Null;
}else{

foreach($tripprice as   $item){

 $trip_price=$item->Total_price;

 }
// dd($booking_method);

$clientbook=books::where('Customer_id',$customer->id)->get();

 foreach($clientbook as   $item){

 $numbers_of_Travelers=$item->numbers_of_Travelers;

 }
}
activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$customerid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);


// update the selected customers


customers::where('id',$customer->id)->update([


    'Name'=>$cLientname,
    'Client_source'=> $Client_source,
    'booking_method'=> $booking_method,
    'email'=> $email,
    'phone'=>$phone,
    'status'=> $Status,
    'Address'=> $Address,
    'passport_num'=>$passport_num,
    'Notes'=> $Notes,
    'salesrep_id'=>$salesrep_id,
     'Balance'=>$trip_price*$numbers_of_Travelers,


]);





//update the selected books


books::where('Customer_id',$customer->id)->update([


'triptype'=>$request->triptype,
'travelDate'=>$request->travelDate,
'ReturnDate'=>$request->ReturnDate,
'hotel_level'=>$request->hotel_level,
'numbers_of_Travelers'=>$request->Number_of_travelers,
'Ways_of_Travel'=>$request->Ways_of_Travel,
'notes'=>$request->Notes,
'user_id'=>$Auth_UID,
'Transaction_id'=>$Transaction_id,


]);






 return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');


    }

    /**
     * Remove the specified resource from storage.
     * @param
     * @param  \App\Models\customers
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,customers $customer)
    {

@$Auth_UID=auth::guard('user')->user()->id??'';

   $Transaction_id=$Auth_UID.'-'.now();


  $Transaction_Type='حذف بيانات العميل رقم ';


 $customerid= $customer->id;


activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$customerid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);
  customers::where('id',$customer->id)->Delete();
  books::where('Customer_id',$customer->id)->Delete();
return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');

    }
/**
     * Remove the specified resource from storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\customers
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  Del_Bulk(Request $request,customers $customersitem)
    {




    }




}
