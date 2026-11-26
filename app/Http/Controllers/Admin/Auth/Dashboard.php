<?php
namespace  App\Http\Controllers\Admin\Auth;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\permissions;
use App\Models\customers;
use App\Models\TripPrice;
use App\Models\books;
use App\Models\logtime;
use App\Models\activitylog;
use App\Models\cash;
use App\Models\Receipts;
use App\Models\receiptsholders;
use App\Models\Payments;
use App\Models\bank;
use App\Models\transaction;
use App\Models\journalentiry;
use App\Models\Expense;
use App\Models\selesreps;
use App\Models\company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Dashboard extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        @$users=auth::guard('user');

         $Aid=auth::guard('user')->user()->id;

         $now=NOW();

    @$logtime_transaction=logtime::where("logouttime",'')->where("user_id",$Aid)->get();


if(count($logtime_transaction) == '0' ){

         logtime::create([

             'logintime'=>$now,
             'logouttime' =>'',
             'user_id' => $Aid
        ]);

}



@$Athuser=user::where("id",$Aid)->get();

foreach($Athuser as $user ){

$user_role=$user-> user_role;


}

//dd($user_role);
// Admin_Permissions  on first time
@$permissionsAthuser=permissions::where("user_id",$Aid)->get();

//dd(count($permissionsAthuser));


if($user_role=="Admin"){
if(count($permissionsAthuser)=='0'){
    permissions::create([
'create'=>'Active'   , 'read'=>'Active'      , 'update'=>'Active'    , 'Delete'=>'Active','user_id'=>$Aid
        ]);
}

}else{




//other_Permissions  on Last time
if(count($permissionsAthuser)=='0'){

    permissions::create([
'create'=>'Active'   , 'read'=>'Active'      , 'update'=>'Active'    , 'Delete'=>'DisActive','user_id'=>$Aid
        ]);
}

}

        @$customers=books::All();   //customers+books
        @$packages=TripPrice::All();   //packages+TripPrice

        @$activitylogs=activitylog::All();

        //@$Allusers=user::all();

        @$logtimes=logtime::all();

         @$Allpermissions=permissions::all();


          @$Checks=Receipts::with('receiptsholders')->get();

          @$cash=cash::all();

         @$bank=bank::all();

         $selesreps=selesreps::get();

         $Expenses =Expense::all();

         @$journalentiry=journalentiry::all();

         @$payments=Payments::get();

         @$receiptsholders=receiptsholders::get();


         @$company=company::get();

         @$cash_transaction=transaction::where('classify','Cash')->get();
         @$Bank_transaction=transaction::where('classify','Bank')->get();

dd('done');
         //$projects=projects::paginate(10,['id', 'title', 'Description', 'Deadline', 'Assigneduser', 'Assignedclient','status']);

         return view('Admin.Auth.dashboard',compact('users','customers','packages','logtimes','activitylogs','Allpermissions','Checks','bank','cash','journalentiry','Expenses','cash_transaction','Bank_transaction','selesreps','payments','receiptsholders','company','permissionsAthuser'));

    }
}
