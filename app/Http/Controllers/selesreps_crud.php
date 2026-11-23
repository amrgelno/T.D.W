<?php

namespace App\Http\Controllers;
use App\Models\selesreps ;

use App\Models\activitylog;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class selesreps_crud extends Controller
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

// dd($request->SalesRep_Name);

 @$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

 $selesreps=selesreps::where('phone',$request->phone)->get();


$countselesreps=count($selesreps);

if($countselesreps == 0){


  selesreps::create([

    'Name'=>$request->SalesRep_Name,
    'phone'=>$request->phone,
    'Address'=>$request->Address,
    'notes'=> $request->Notes,
    'user_id'=>$Auth_UID,
    'Transaction_id'=>$Transaction_id,
                ]);



activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>'add-salesrep   إضافة مندوب مبيعات',

'user_id'=>$Auth_UID


   ]);


$mssg="Good  Data confirmed";

return redirect()->route('user.Dashboard')->with('success-salesrep',$mssg);

}else{


$mssg="error duplicated  value  You Need to change it !";
return redirect()->route('user.Dashboard')->with('failed-salesrep',$mssg);


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
    public function update(Request $request,selesreps $selesrep)
    {

 @$Auth_UID=auth::guard('user')->user()->id??'';
 $Transaction_id=$Auth_UID.'-'.now();

// dd($selesrep->id);

selesreps::where('id',$selesrep->id)->update([

    'Name'=>$request->SalesRep_Name,
    'phone'=>$request->phone,
    'Address'=>$request->Address,
    'notes'=> $request->Notes,
    'user_id'=>$Auth_UID,
                ]);

 $Transaction_Type='تحديث  مندوب مبيعات رقم';


$selesrepid= $selesrep->id;

  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$selesrepid.$Transaction_Type,

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
    public function destroy(Request $request,selesreps $selesrep)
    {


     @$Auth_UID=auth::guard('user')->user()->id??'';
      $Transaction_id=$Auth_UID.'-'.now();


       $Transaction_Type=' حذف مندوب مبيعات رقم';


          $selesrepid= $selesrep->id;


selesreps::where('id',$selesrep->id)->Delete();

  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$selesrepid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);


        return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');

    }
}
