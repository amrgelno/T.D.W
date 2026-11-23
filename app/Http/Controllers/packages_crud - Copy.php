<?php

namespace App\Http\Controllers;
use App\Models\packages;
use App\Models\TripPrice;
use App\Models\activitylog ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class packages_crud extends Controller
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


 packages::create([


    'triptype'=>$request->triptype,

    'Service_level'=>$request->Service_level,

     'notes'=>$request->notes,

     'status'=>"Active",

     'user_id'=>$Auth_UID,

    'Transaction_id'=>$Transaction_id


                ]);



activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>'add-price|offers  أضافة عرض سعر',

'user_id'=>$Auth_UID


   ]);


TripPrice::create([
'Total_price'=>$request->trip_price,
'Single_Room_cost'=>$request->Single_Room_cost,
'Duplex_Room_cost'=>$request->Duplex_Room_cost,
'Triple_Room_cost'=>$request->Triple_Room_cost,
'insurance'=>$request->insurance,
'airline'=>$request->airline,
'visa'=>$request->visa,
'costperperson'=>$request->Cost_per_person,
'Transporter_Cost'=>$request->Transporter_Cost,
'user_id'=>$Auth_UID,
'Transaction_id'=>$Transaction_id

 ]);


$package=packages::where('Transaction_id',$Transaction_id)->get();


foreach($package as   $item){


$currentpackage=$item->id;


}


TripPrice::where('Transaction_id',$Transaction_id)->update([

'packages_id'=>$currentpackage,


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
 public function update(Request $request, packages $package){


  @$Auth_UID=auth::guard('user')->user()->id??'';

   $Transaction_id=$Auth_UID.'-'.now();


  $Transaction_Type='تحديث بيانات عرض سعر رقم ';


  $packageid= $package->id;


        // update the selected package

packages::where('id',$package->id)->update([

'triptype'=>$request->triptype,

'Service_level'=>$request->Service_level,

 'notes'=>$request->notes,



]);


//update the selected Trip_price

TripPrice::where('packages_id',$package->id)->update([

'Total_price'=>$request->trip_price,
'Single_Room_cost'=>$request->Single_Room_cost,
'Duplex_Room_cost'=>$request->Duplex_Room_cost,
'Triple_Room_cost'=>$request->Triple_Room_cost,
'insurance'=>$request->insurance,
'airline'=>$request->airline,
'visa'=>$request->visa


]);



activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$packageid.$Transaction_Type,

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
    public function destroy(Request $request, packages $package)
    {


 @$Auth_UID=auth::guard('user')->user()->id??'';

   $Transaction_id=$Auth_UID.'-'.now();


  $Transaction_Type='حذف بيانات عرض سعر رقم ';


  $packageid=$package->id;


activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$packageid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);


  packages::where('id',$packageid)->update([

'status'=>"DisActive",

]);

    return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');

    }
}
