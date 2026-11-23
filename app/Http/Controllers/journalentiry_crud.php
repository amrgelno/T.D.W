<?php

namespace App\Http\Controllers;

use App\Models\journalentiry;

use App\Models\activitylog;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class journalentiry_crud extends Controller
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


  journalentiry::create([

    'Transaction'=>$request->Transaction,
    'Debit'=>$request->Debit,
    'Credit'=>$request->Credit,
    'Amount'=> $request->Amount,
    'user_id'=>$Auth_UID,
    'Transaction_id'=>$Transaction_id,
                ]);



  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>'add-journalentiry   إضافة قيد يومي',

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
    public function update(Request $request, journalentiry $entiry)
    {


 @$Auth_UID=auth::guard('user')->user()->id??'';

  $Transaction_id=$Auth_UID.'-'.now();

  $Transaction_Type='تحديث  قيد يومي رقم';


  $journalentiryid= $entiry->id;


  journalentiry::where("id",$entiry->id)->update([

    'Transaction'=>$request->Transaction,
    'Debit'=>$request->Debit,
    'Credit'=>$request->Credit,
    'Amount'=> $request->Amount,
    'user_id'=>$Auth_UID,
    'Transaction_id'=>$Transaction_id,
                ]);



  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$journalentiryid.$Transaction_Type,

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
    public function destroy(journalentiry $entiry)
    {


@$Auth_UID=auth::guard('user')->user()->id??'';

 $Transaction_id=$Auth_UID.'-'.now();

 $journalentiryid= $entiry->id;

  $Transaction_Type='حذف  قيد يومي رقم';


journalentiry::where("id",$entiry->id)->Delete();


  activitylog::create([

'Transaction_id'=>$Transaction_id,

'Transaction_Type'=>$journalentiryid.$Transaction_Type,

'user_id'=>$Auth_UID


   ]);


return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');



//dd($entiry->id);



    }
}
