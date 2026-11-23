<?php

namespace App\Http\Controllers;
use App\Http\Traits\UploadImg;
use App\Models\company;
use Illuminate\Http\Request;

class company_crud extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


     $company=company::whereRaw("ID = (select Max(id) from companies )")->get();

        $countcompany = count($company);

        if( $countcompany > 0){


            foreach ($company as $companies ) {

                $comp_Na = $companies->Comp_Name;
                $Business_Type= $companies->Business ;
                $Email= $companies->Email ;
                $streetAddress=$companies->Address;
                $Tax_register= $companies->Tax_register ;
                $Tele_Number= $companies->Tele_Number ;
                $postalCode=$companies->postalCode;
                $fax=$companies->fax ;
                $country=$companies->country ;
                $city=$companies->city;
                $WBDescription=$companies->WBDescription;
                $path_pic=$companies->path_pic;



            }

             return view('Admin.Auth.company');




        }



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
     * @param  \App\Models\company
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    USE UploadImg;   //  use Traits

    public function store(Request $request){

        if(!empty($request -> uploadlogo)){

            @$FILENAME=$this ->saveImage($request->uploadlogo ,'Front/IMG/');

        }else{

            @$FILENAME=Null;

        }


$company=company::all();


foreach($company as $item){


$COMPANY_ID=$item->ID;


}



$countcompany=count($company);

if($countcompany == 0){


        // company::create($request->all());

        company::create([

                'Comp_Name'=>$request->comp_Na ,
                'Business' => $request->Business_Type,
                'Address' => $request->streetAddress,
                'WBDescription' => $request->WBDescription,
                'Email'=>$request->Email,
                'postalCode'=>$request->postalCode,
                'Tax_register' =>$request->Tax_register,
                'Tele_Number'=>$request->Tele_Number,
                'fax'=>$request->fax,
                'country'=>$request->country,
                'city' => $request->city,
                // 'WBDescription'=>$request->WBDescription,
                'lOGO' =>$FILENAME,

                ]);


$mssg="Data store confirmed";

return redirect()->route('user.Dashboard')->with('Companysuccess',$mssg);

}else{



$company=company::Min('ID');



foreach($company as $item){


$COMPANY_ID=$item->ID;


}


// dd($COMPANY_ID);

    company::where('ID',$COMPANY_ID)->update([

                'Comp_Name'=>$request->comp_Na ,
                'Business' => $request->Business_Type,
                'Address' => $request->streetAddress,
                'WBDescription' => $request->WBDescription,
                'Email'=>$request->Email,
                'postalCode'=>$request->postalCode,
                'Tax_register' =>$request->Tax_register,
                'Tele_Number'=>$request->Tele_Number,
                'fax'=>$request->fax,
                'country'=>$request->country,
                'city' => $request->city,
                // 'WBDescription'=>$request->WBDescription,
                'lOGO' =>$FILENAME,

                ]);




$mssg="Data update confirmed";

return redirect()->route('user.Dashboard')->with('Companyfaild',$mssg);


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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
