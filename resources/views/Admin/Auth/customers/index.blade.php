
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
            <li class="breadcrumb-item"><a href="#Summary">Home</a></li>
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
            <h5 class="m-0">  <span class="fa fa-user" aria-hidden="true"></span>  customers        العملاء </h5>
            </div>





@include('Admin.Auth.customers.individual_Client_create')


@include('Admin.Auth.customers.Group_Client_create')






        <div class="card card-primary card-outline">
            <div class="card-header">
            <h5 class="m-0">Featured</h5>
            </div>
            <div class="card-body">

{{-- <button   type="button" class=" btn btn-secondary btn-sm shadow-sm px-4 mb-2" data-toggle="modal" data-target="#customer-add">
<i class="fa fa-plus mr-1"></i>   add-customer   إضافة عملاء
</button> --}}
@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->create=='Active' )

<select name='Clientselector' onchange='Clientfx()'  data-toggle="modal"  id='Clientselector'     >
<option> أختر من القائمة</option>

<option  id="add-individual_Client" value="add-individual_Client">   add-individual Client   إضافةعميل فردي    </option>

<option value="add-Group_Client" >   add-Group Client   إضافة عميل مجموعات    </option>

</select>

            <h6     class="card-title">You can Add New customers via this button  :- &nbsp; </h6>
@endif

@endforeach
<br/>

<div   class="no-print dt-buttons btn-group flex-wrap">
    {{-- <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> --}}
    <button id="export" class="btn btn-secondary buttons-csv buttons-html5"  type="button"><span>Export Excel</span></button>
     <button onclick="printcontent('ex')"   type="button"  class="btn btn-secondary buttons-print"  type="button"><i class="fas fa-print"></i><span>Print</span></button>
     {{-- <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true">
        <span>Column visibility</span><span class="dt-down-arrow"></span></button></div> --}}
    </div>

<table  id="example1" border="1"  class="table table-responsive"   style='width:100%' >


                  <thead>

<tr class="trc" align='center' >

<th scope="col" ><span align='center'> # </span></th>
<th scope="col">Name-الأسم</th>
{{-- <th scope="col">Email- الأيميل</th> --}}
<th scope="col">Name-أسم مندوب</th>


<th scope="col">Phone-رقم موبيل</th>

<th scope="col">passport-رقم جواز </th>

{{-- <th scope="col">Image-الصورة</th> --}}
<th scope="col">	Address-العنوان</th>

<th scope="col">classify- التصنيف </th>

<th scope="col">status-حالة العميل </th>

<th scope="col">booking_method-طريقة حجز   </th>


<th scope="col">	Notes-ملاحظات</th>



<th scope="col">	totalbalance-أجمالي ارصدة عملاء</th>


@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->update=='Active' )
<th scope="col">edit</th>
@endif


@if($userpermissions->Delete=='Active' )
<th scope="col">Delete </th>
@endif



@endforeach


</tr>
</thead>



@php   $i=0;   @endphp
 <tbody>
@foreach($customers  as $customer)


<tr id="{{ $customer -> customers ->classify  }}{{ $customer -> customers ->phone  }}">
<td> {{++$i}}     </td>

<td>{{ $customer -> customers ->Name  }} </td>


<td> @foreach($selesreps  as $selesrep) @if ( $customer -> customers -> salesrep_id ==  $selesrep ->id  )
     {{ $selesrep ->Name  }}
    @endif @endforeach </td>


{{-- <td> {{ $customer -> customers ->email  }} </td> --}}

<td>  {{ $customer -> customers ->phone  }}  </td>

<td>  @if($customer -> customers ->passport_num =='0')

this passport is exsit     -      هذا باسبورد موجود مسبقا
رجاء تعديله
@else
{{$customer -> customers ->passport_num}}

@endif  </td>

<td> {{ $customer -> customers ->Address  }} </td>

<td>{{ $customer -> customers ->classify  }}
@if($customer -> customers ->classify == 'Group_Client')عميل مجموعات
@elseif($customer -> customers ->classify == 'individual_Client')عميل فردي@endif


</td>

<td>
    {{ $customer -> customers ->status  }} :
@if($customer -> customers ->status == 'Booked_Clients')
@if($customer -> customers ->classify == 'individual_Client')
@if(($customer -> customers ->Balance == (@$customer -> TripPrice -> Total_price * $customer->numbers_of_Travelers) ))
<i   data-target="#clientReceipt-create{{ $customer -> customers ->id  }}" data-toggle="modal" id='Creatreceipt' class="fas fa-receipt"  title="Creat  receipt  أنشاء أبصال ""></i>
<span  style='' id='status'> Tentatively reserved- محجوز مبدئًيا  </span>  <div>
@elseif (($customer -> customers ->Balance < @$customer -> TripPrice -> Total_price * $customer->numbers_of_Travelers)and($customer -> customers ->Balance != '0'))
<i data-target="#clientReceipt-create{{ $customer -> customers ->id  }}" data-toggle="modal"  class="fas fa-receipt" title='Creatreceipt   أنشاء أيصال '></i> partially paid-مدفوع جزئًيا
@elseif (($customer -> customers ->Balance == '0'))
Fully paid- مدفوع بالكامل
@endif
@endif
@endif
</td>


<td>{{ $customer -> customers ->booking_method  }}</td>


{{-- <td><img src="../Front/IMG/{{ $customers -> image  }}"
style="width:50px; height:50px;"/>

<input type='file'   name='upload'   >

</td> --}}



<td> {{ $customer -> customers ->notes  }} </td>


<td> @if($customer -> customers ->classify == 'individual_Client')

    {{ $customer -> customers ->Balance    }}


@elseif($customer -> customers ->classify == 'Group_Client')

    <span class='fas fa-arrow-down text-sm' data-toggle="modal" data-target="#GroupClient-show{{$customer->id}}" title='all Group Client  Books for this Receipt'> </span>

{{\App\Models\customers::where('salesrep_id',$selesrep->id)->sum('Balance')  }}

@endif
</td>

@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->update=='Active' )

<td  class='no-print'>

@if($customer -> customers ->classify == 'individual_Client')
@if(($customer -> customers ->Balance - @$customer -> TripPrice -> Total_price * $customer->numbers_of_Travelers )=='0')
<button type="button"   class="btn btn-primary btn-sm shadow-sm px-4 mb-2" data-toggle="modal"

 data-target="#Booked_Clients_update{{ $customer -> customers ->id  }}">
  <i class="fas fa-edit"></i>  update Booking  تعديل حجز
</button>
@elseif ($customer -> customers ->Balance == Null)

<button type="button"   class="btn btn-primary btn-sm shadow-sm px-4 mb-2" data-toggle="modal"

 data-target="#Booked_Clients_update{{ $customer -> customers ->id  }}">
  <i class="fas fa-edit"></i>  update Client Data   تعديل
</button>
@elseif ($customer -> customers ->Balance == '0'   )


<button type="button"   class="btn btn-primary btn-sm shadow-sm px-4 mb-2" data-toggle="modal"

 data-target="#Booked_Clients_update{{ $customer -> customers ->id  }}">
  <i class="fas fa-edit"></i>  New Booking           أضافة حجز جديد
</button>

@endif   @endif
</td>
@endif


@if($userpermissions->Delete=='Active' )
<td  class='no-print'>@if($customer -> customers ->classify == 'individual_Client')
  @if(($customer -> customers ->Balance ==( @$customer ->TripPrice->Total_price * $customer->numbers_of_Travelers)))
<form action="{{route('customers.destroy',$customer -> customers ->id)}}#customers" method="Post">
@csrf
@method('DELETE')

<!-- <input type="hidden"  name="customers_id"   value="{{ $customer -> customers ->id  }}"/> -->

<input  type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
</form>


@elseif ($customer -> customers ->Balance == Null or $customer -> customers ->Balance == '0'   )

<form action="{{route('customers.destroy',$customer -> customers ->id)}}#customers" method="Post">
@csrf
@method('DELETE')

<!-- <input type="hidden"  name="customers_id"   value="{{ $customer -> customers ->id  }}"/> -->

<input  type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
</form>


@endif
@endif
</td> @endif
</tr>


@endforeach
    @endforeach  </tbody> </tfoot>

</table>

            </div>
        </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

@include('Admin.Auth.customers.update')
@include('Admin.Auth.customers.GroupClientindex')
@include('Admin.Auth.customers.createReceipts')


 @if($massage=Session::get('success'))



<div class="swal2-container swal2-center swal2-backdrop-show" data-swal2-theme="light" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
  <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
  <div class="swal2-success-ring"></div>
  <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
  <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
</div><div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: block;">{{$massage}}!</h2><div class="swal2-html-container" id="swal2-html-container" style="display: block;">تم أنشاء/ تحديث بيانات بنجاح!</div><input id="swal2-input" class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select id="swal2-select" class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label class="swal2-checkbox" style="display: none;"><input type="checkbox" id="swal2-checkbox"><span class="swal2-label"></span></label><textarea id="swal2-textarea" class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions" style="display: flex;"><div class="swal2-loader"></div>
<button onclick=" document.querySelector('.swal2-container').style.display='none'" type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(112, 102, 224, 0.5);">OK </button><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(220, 55, 65, 0.5);">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(255, 0, 0, 0.5);">Cancel</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div>


                                    @endif

 @if($massage=Session::get('failed'))


<div class="swal2-container swal2-center swal2-backdrop-show" data-swal2-theme="light" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: block;">{{$massage}}!</h2><div class="swal2-html-container" id="swal2-html-container" style="display: block;">خطأ رقم موبيل مكرر</div><input id="swal2-input" class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select id="swal2-select" class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label class="swal2-checkbox" style="display: none;"><input type="checkbox" id="swal2-checkbox"><span class="swal2-label"></span></label><textarea id="swal2-textarea" class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions" style="display: flex;"><div class="swal2-loader"></div><button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(212, 0, 0, 0.5);" onclick=" document.querySelector('.swal2-container').style.display='none'">OK</button><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(220, 55, 65, 0.5);">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(255, 0, 0, 0.5);">Cancel</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div>



                                    @endif



</div>
<!-- /.content -->


