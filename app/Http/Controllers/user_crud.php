<?php

namespace App\Http\Controllers;
use App\Http\Traits\UploadImg;
use App\Models\user;
use App\Models\permissions;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Crypt;

class user_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     *
     *
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









    }

   /**
     * Store a newly created resource in storage.
     * @param  App\Http\UploadImg;
     * @param  \App\Models\user
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request)
    {



        $profilepic=$request->profilepic;

        if(!empty($profilepic)){

            @$FILENAME=$this ->saveImage($profilepic ,'Front/IMG/');

        }else{

            @$FILENAME=' ';

        }


        user::where( 'id', $request->ID )->update([


             'pic'=>$FILENAME,


             'token' =>base64_encode($request->token),


             'password' => bcrypt($request->token)


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
     * @param  App\Http\UploadImg;
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    USE UploadImg;   //  use Traits


    public function edit($id)
    {







    }

    /**
     * Update the specified resource in storage.
     *@param \App\Models\user
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,user $user)
    {

  $users_id=$user->id;

$SelectRole=$request->SelectRole;
$Job_Position=$request->Job_Position;
//dd($users_id);

        user::where('id', $users_id )->update([

             'user_role' =>$SelectRole,
             'Job_Position' =>$Job_Position,

           ]);

 return redirect()->route('user.Dashboard')->with('success','update  sent  succefuly');


    }

     /**
     * Remove the specified resource from storage.
     * @param
     * @param  \App\Models\user
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function destroy(Request $request,user $user)    {

         $users_id=$user->id;



        user::where( 'id', $users_id )->Delete();
        permissions::where('user_id', $users_id )->Delete();

        return redirect()->route('user.Dashboard')->with('success','Delete succefuly');


       }



}
