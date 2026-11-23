<div class="content-wrapper">
<div class="preloader flex-column justify-content-center align-items-center"  >

    <img class="animation__shake" src="{{asset('Front/IMG/TDW-logo.png')}}"
    alt="AdminLTELogo" height="60" width="60">


    <span> Loading ... </span>
  </div>


 <div class="card-header">
            <h5 class="m-0">
       <SPAN class="far fa-copy"></SPAN> Summary    الملخص العام   </h5>
            </div>

<div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class='statics' >
                <div class='row' style='flex-wrap: nowrap;'> 
            <div class="info-box mb-3 bg-warning m-5">
              <span class="info-box-icon"><i class="fas fa-money-check-alt"  aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Receipts</span>
                <span class="info-box-number">{{count($Checks)}}
                </span>     <br/>
 <span> Balance:  </span>{{$Checks->sum("Amount")}}
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success  m-5">
              <span class="info-box-icon"><i class="fa fa-user" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Customers</span>
                <span class="info-box-number">{{ \App\Models\customers::where('status','Booked_Clients')->Distinct('phone')->count()}}
                </span><br/>
 <span> Balance:  </span> {{ \App\Models\customers::where('status','Booked_Clients')->sum('Balance')}}
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger  m-5">
              <span class="info-box-icon"><i class="fa fa-users" aria-hidden="true"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Leads</span>
                <span class="info-box-number">{{ \App\Models\customers::where('status','Potential_clients')->count()}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info  m-5">
              <span class="info-box-icon">
               <i class="fa fa-user-circle" aria-hidden="true"></i>

                </span>

              <div class="info-box-content">
                <span class="info-box-text">Users
                </span>
                <span class="info-box-number">{{\App\Models\user::count()}}</span>
              </div>
              <!-- /.info-box-content -->

            </div>



            </div>
            <!-- /.info-box -->

            </div>
  </div>

<div class="col-md-12">

     <div class='statics row mx-auto' >


<div class="col-md-4">
<div class="col-md-11">
<div class="info-box mb-3 bg-gradient-blue m-5">
              <span class="info-box-icon"><img src="{{asset('Front/ICON/Buildings_building_house_city_office_home.png')}}" width="25px" height="25px"></span>
                 <div class="info-box-content">
                <span class="info-box-text">Company_Balance  <br/> رصيد الشركة
                </span>
                <span class="info-box-number Number_static">{{\App\Models\transaction::sum('Amount')}}
                  </span>
              </div>
            </div>

        </div>

<div class="col-md-11">
<div class="info-box mb-3 bg-gradient-secondary  m-5">
              <span class="info-box-icon"><img src="{{asset('Front/ICON/spending-money2.png')}}" width="25px" height="25px"></span>
                 <div class="info-box-content">
                <span class="info-box-text">Total Expenses <br/>  أجمالي مصروفات
                </span>
                <span class="info-box-number Number_static">{{\App\Models\Expense::sum('Amount')}}
                  </span>
              </div>
            </div>
        </div>



       <div class="col-md-11">

<div class="info-box mb-3 bg-gradient-cyan  m-5">
              <span class="info-box-icon"><img src="{{asset('Front/ICON/Down_arrow_download_up_page.png')}}" width="25px" height="25px"></span>
                 <div class="info-box-content">
                <span class="info-box-text ">Total Revenue  <br/> أجمالي الأيرادت
                </span>
                <span class="info-box-number Number_static">
                    {{ (\App\Models\transaction::where('transaction_type','Receipts-cash')->sum('Amount')) + (\App\Models\transaction::where('transaction_type','Receipts-Bank')->sum('Amount')) }}

                             {{-- {{ (\App\Models\transaction::where('transaction_type','Receipts-cash')->sum('Amount')-Receipts-cash-Back) + (\App\Models\transaction::where('transaction_type','Receipts-Bank')->sum('Amount')-Receipts-Bank-Back) }} --}}
                  </span>
              </div>
            </div>
 </div>
        </div>



        <div class="col-md-5">


<div class="col-md-12">
                    <p class="text-center">
                      <strong>Receipts Analysis</strong>
                    </p>

                    <div class="progress-group">
                      Closed Receipts <br/> الأيصالات مدفوعة     Balance:{{$Checks->where('status','close')->Sum('Amount')}}
                      <span class="float-right"><b>{{$Checks->where('status','close')->count($Checks)}}</b>/{{count($Checks)}}</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: {{$Checks->where('status','close')->count('Amount')/$Checks->count('Amount')*100}}%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      opened Receipts <br/> الأيصالات غير مدفوعة    Balance:{{$Checks->where('status','open')->Sum('Amount')}}
                      <span class="float-right"><b>{{$Checks->where('status','open')->count($Checks)}}</b>/{{count($Checks)}}</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width:{{$Checks->where('status','open')->count('Amount')/$Checks->count('Amount')*100}}%"></div>
                      </div>
                    </div>

                  </div>


                  <div class="col-md-12">
                    <p class="text-center">
                      <strong>Client Analysis</strong>
                    </p>

                     <strong>Booked client Analysis</strong>
                    <div class="progress-group">
                      Not paid   -    غير مسددين
                      <span class="float-right"><b>
{{ \App\Models\customers::where('status','Booked_Clients')->where("Balance",'>',"0")->Distinct('phone')->count('id')}}

                        </b>/{{ \App\Models\customers::where('status','Booked_Clients')->Distinct('phone')->count('id')}}</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width:{{ \App\Models\customers::where('status','Booked_Clients')->where("Balance",'>',"0")->Distinct('phone')->count('id')/\App\Models\customers::where('status','Booked_Clients')->Distinct('phone')->count('id')*100}}%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->


                     <div class="progress-group">
                           Fully paid- مدفوع بالكامل
                      <span class="float-right"><b>
{{ \App\Models\customers::where('status','Booked_Clients')->where("Balance",'=',"0")->Distinct('phone')->count('id')}}
                      </b>/{{ \App\Models\customers::where('status','Booked_Clients')->Distinct('phone')->count('id')}}</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: {{ \App\Models\customers::where('status','Booked_Clients')->where("Balance",'=',"0")->Distinct('phone')->count('id')/\App\Models\customers::where('status','Booked_Clients')->Distinct('phone')->count('id')*100}}%"></div>
                      </div>







                    </div>





                  </div>


        </div>
<div class="card-body col-md-3">

<div class="col-md-12" id="donut-chart" style="height: 300px; padding: 0px; /*position: relative;*/">
<canvas class="flot-base"      width="383"    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 191.751px; height: 300px;">
</canvas>
<canvas class="flot-overlay"   width="383"   style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 191.751px; height: 300px;"></canvas>

<span class="pieLabel" id="pieLabel0" style="position: absolute; top: 90.491px; left: 122.742px;"><div style="font-size:13px; text-align:center; padding:2px; color: #a92c2c; font-weight: 600;">cash<br>{{$cash_transaction ->sum('Amount')/\App\Models\transaction::sum('Amount')*100}}</div></span>
<span class="pieLabel" id="pieLabel1" style="position: absolute; top: 180.491px; left: 108.742px;"><div style="font-size:13px; text-align:center; padding:2px; color: #000000; font-weight: 600;">Bank<br>{{$Bank_transaction->sum('Amount')/\App\Models\transaction::sum('Amount')*100}}</div></span>
<span class="pieLabel" id="pieLabel2" style="position: absolute; top: 128.491px; left: 6.74175px;"><div style="font-size:13px; text-align:center; padding:2px; color: #00ffc3; font-weight: 600;">Expenses<br>{{\App\Models\Expense::sum('Amount')/\App\Models\transaction::sum('Amount')*100}}</div></span></div>

              </div>


     </div>
            <!-<div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">packages Analysis     تحليل الباقات السياحية </h3>
                {{-- <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div> --}}
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>

                    <th>packages</th>
                    <th>Price</th>
                    <th>Sales</th>
                    {{-- <th>More</th> --}}
                  </tr>
                  </thead>
                  <tbody>


@foreach($packages  as $package)

@if($package->packages-> status == 'Active')
                  <tr>
<td>{{ $package->packages->triptype }}</td>
<td> {{$package->Total_price }}</td>

<td> {{ $Checks->where('packages_id',$package->packages_id)->where('status','close')->sum('Amount') }}   </td>
{{-- <td>
    <a href="#" class="text-muted">
    <i class="fas fa-search"></i>
    </a>
</td> --}}
                  </tr>


                  @endif
@endforeach

                  </tbody>
                </table>




              </div>
            </div>
          </div>  </div>



























