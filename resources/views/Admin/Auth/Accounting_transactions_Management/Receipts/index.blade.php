
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        {{-- <h1 class="m-0">DashBoard-Starter Page</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
        <!-- /.col-md-6 -->
        <div class="card">
            <div class="card-header">
            <h5 class="m-0">   <span class="fas fa-receipt" aria-hidden="true"></span>   Receipts        الأيصالات </h5>
            </div>



@include('Admin.Auth.Accounting_transactions_Management.Receipts.Client_Receipts_create')

@include('Admin.Auth.Accounting_transactions_Management.Receipts.other_Receipts')


        <div class="card card-primary card-outline">
            <div class="card-header">
            <h5 class="m-0">Featured</h5>
            </div>

            <div class="card-body">

{{-- <button   type="button" class=" btn btn-secondary btn-sm shadow-sm px-4 mb-2" data-toggle="modal" data-target="#Receipts-add">
<i class="fa fa-plus mr-1"></i>   add-Receipts for Client   إضافة أيصالات
</button> --}}



@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->create=='Active' )


<div class='col-lg-12'>

<select name="Receiptsselector"   onchange="Receiptsfx()"  data-toggle="modal"  id="Receiptsselector"     >
<option> أختر من القائمة</option>

<option  value="add-Client_Receipts">   add-Receipts for Client   إضافة أيصالات للعملاء   </option>

<option value="add-other_Receipts" >  add-other_Receipts    إضافة أيصالات  أخرى    </option>

</select>



            <h6     class="card-title">You can Add New Receiptss via this button  :- &nbsp; </h6>
</div>

@endif

@endforeach

<br/>

<div   class="no-print dt-buttons btn-group flex-wrap">
    {{-- <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button>
    <button id="export" class="btn btn-secondary buttons-csv buttons-html5"  type="button"><span>Export Excel</span></button>
     <button onclick="printcontent('ex')"   type="button"  class="btn btn-secondary buttons-print"  type="button"><i class="fas fa-print"></i><span>Print</span></button>
   <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true">
        <span>Column visibility</span><span class="dt-down-arrow"></span></button></div>
    </div>  --}} </div>

<div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
  <div class="row">
    <div class="col-sm-12">

<table  id="example4" border="1"  class="table table-responsive TF dataTable no-footer" style="width: 840px; table-layout: fixed;" >

 <thead>
<tr>

<th scope="col" ><span align='center'> # </span></th>
<th scope="col"> Receipt_No-رقم الأيصال</th>
{{-- <th scope="col"> Receipt_date - تاريخ الأيصال</th> --}}

<th scope="col"> Amount-المبلغ</th>


<th scope="col"> Client Name  - أسم العميل  </th>

<th scope="col">Receipt Source - أسم مصدر الأيصال   </th>

{{-- <th scope="col">Image-الصورة</th> --}}
<th scope="col">  Deposit Source	 -   مورد تحصيل</th>

<th scope="col"> classify  -   تصنيف الأيصال  </th>

<th scope="col" class='no-print'>print/addfunds/Delete</th>



</tr>
 </thead>


@php   $i=0;   @endphp
@foreach($Checks  as $Check)


<tr>
<td> {{++$i}}     </td>

<td>{{ $Check->Check_Number  }} <hr/>
Datetime:{{ $Check->created_at->format('Y-m-d h:i A') }}
 <br/>status: {{ $Check->status  }}</td>

{{-- <td> {{ $Check->Check_date  }} </td> --}}

<td>

    <span class='fas fa-arrow-down text-sm' data-toggle="modal" data-target="#payments-show{{$Check->id}}" title='all finnicial payments for this Receipt'> </span>
    {{ $Check->Amount  }}

<br/>

    <span style='color:red'> <B> Discount:  </B></span> {{ $Check->Discount }}
 </td>


<td>

 @if($Check->classify == 'other-Receipts-أيصالات أخري' )



 {{   $Check->receiptsholders->Name  }}  {{$Check->receiptsholders->Receipt_holders_No}}



@else

 {{ $Check->customers->Name  }}

@endif
</td>


<td>{{ $Check->classify  }}  </td>

<td>{{ $Check->Receipt_Source  }}  </td>


<td>{{ $Check->payment_method  }} : {{ $Check->via  }}</td>

<td  class='no-print'>

<div align='center'>





@if($Check->classify == 'individual_Client-Receipt- أيصال عميل فردي')

<form action="{{route('Receipts.edit',$Check->id)}}" method="GET">

@elseif($Check->classify == 'Group_Client-Receipt- أيصال عميل مجموعات')

<form action="{{route('CGReceipts.edit',$Check->id)}}" method="GET">




@else


<form action="{{route('ReceiptsHolders.index')}}" method="GET">


@endif





@csrf
@method('GET')

<button  type="SUBMIT" name="Receipts" VALUE="{{$Check->id}}"   class="btn btn-primary" style='background:GREEN'>print
</button>
</form></div>

<hr/>
@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->create=='Active' )
@if($Check->status == 'open')
<button type="button"   class="btn btn-primary btn-sm shadow-sm px-4 mb-2" data-toggle="modal"

 data-target="#Receipts_update{{ $Check->id  }}">
  <i class="fas fa-edit"></i> Add Finnicial installments  أضافة دفعة مالية
</button>
@endif
@endif


{{-- <input  onclick='reload()' type="SUBMIT" name="updateReceiptss" VALUE="update"   class="btn btn-primary" style='background:yellow'> --}}
<hr/><br/>
<div align='center'>

   @if($userpermissions->Delete=='Active' )
    @if($Check->status == 'open')


@foreach($customers  as $customer)

 @if($customer -> customers ->id ==   $Check->Customer_id  )
@if($customer -> customers ->classify == 'individual_Client')


<form action="{{route('Receipts.destroy',$Check->id)}}#Receipts" method="Post">

@elseif($customer -> customers ->classify == 'Group_Client')


<form action="{{route('CGReceipts.destroy',$Check->id)}}#Receipts" method="Post">


@endif

@endif

@endforeach






@csrf
@method('DELETE')

<!-- <input type="hidden"  name="Receiptss_id"   value="{{ $Check->id  }}"/> -->

<input  type="SUBMIT" name="DELETE" VALUE="x Delete- حذف"   class="btn btn-primary" style='background:red'>



</form>

@endif  @endif
</div>
</td>


@endforeach

</tr>
    @endforeach

</table>
</div> </div> </div> </div>
            </div>
        </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

{{-- @include('Admin.Auth.Receiptss.update') --}}

@include('Admin.Auth.Accounting_transactions_Management.Receipts.update')
@include('Admin.Auth.Accounting_transactions_Management.Receipts.payments')
</div>
<!-- /.content -->



 @if($massage=Session::get('Receiptssuccess'))



<div class="swal2-container swal2-center swal2-backdrop-show" data-swal2-theme="light" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
  <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
  <div class="swal2-success-ring"></div>
  <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
  <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
</div><div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: block;">{{$massage}}!</h2><div class="swal2-html-container" id="swal2-html-container" style="display: block;">تم أنشاء/ تحديث بيانات بنجاح!</div><input id="swal2-input" class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select id="swal2-select" class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label class="swal2-checkbox" style="display: none;"><input type="checkbox" id="swal2-checkbox"><span class="swal2-label"></span></label><textarea id="swal2-textarea" class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions" style="display: flex;"><div class="swal2-loader"></div>
<button onclick=" document.querySelector('.swal2-container').style.display='none'" type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(112, 102, 224, 0.5);">OK </button><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(220, 55, 65, 0.5);">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(255, 0, 0, 0.5);">Cancel</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div>


                                    @endif

 @if($massage=Session::get('Receiptsfaild'))


<div class="swal2-container swal2-center swal2-backdrop-show" data-swal2-theme="light" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: block;">{{$massage}}!</h2><div class="swal2-html-container" id="swal2-html-container" style="display: block;">خطأ رقم الايصال مكرر</div><input id="swal2-input" class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select id="swal2-select" class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label class="swal2-checkbox" style="display: none;"><input type="checkbox" id="swal2-checkbox"><span class="swal2-label"></span></label><textarea id="swal2-textarea" class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions" style="display: flex;"><div class="swal2-loader"></div><button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(212, 0, 0, 0.5);" onclick=" document.querySelector('.swal2-container').style.display='none'">OK</button><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(220, 55, 65, 0.5);">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(255, 0, 0, 0.5);">Cancel</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div>



                                    @endif
