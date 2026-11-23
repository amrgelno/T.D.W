
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
            <h5 class="m-0">  <img src="{{asset('Front/ICON/spending-money2.png')}}"    width='25px'    height='25px'>  Expenses        المصروفات </h5>
            </div>


            <div class="card-body modal fade" id="Expenses-add" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true">



                       <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">

<div>
  <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق"  onclick="document.querySelector('#paymentmethod').setAttribute('style','display: none;');">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>  </div>





@include('Admin.Auth.Accounting_transactions_Management.Expenses.create')




            </div>
        </div>
   </div>
        </div>


        <div class="card card-primary card-outline">
            <div class="card-header">
            <h5 class="m-0">Featured</h5>
            </div>
            <div class="card-body">
@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->create=='Active' )

<button   type="button" class=" btn btn-secondary btn-sm shadow-sm px-4 mb-2" data-toggle="modal" data-target="#Expenses-add">
   add-Expenses   إضافة مصروف
</button>


            <h6     class="card-title">You can Add New Expenses via this button  :- &nbsp; </h6>
@endif

@endforeach
<br/>

{{-- <div   class="no-print dt-buttons btn-group flex-wrap">
     <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button>
    <button id="export" class="btn btn-secondary buttons-csv buttons-html5"  type="button"><span>Export Excel</span></button>
     <button onclick="printcontent('ex')"   type="button"  class="btn btn-secondary buttons-print"  type="button"><i class="fas fa-print"></i><span>Print</span></button>
    <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true">
        <span>Column visibility</span><span class="dt-down-arrow"></span></button></div>
    </div> --}}

<table    border="1"  class="table table-responsive" >


                  <thead>

<tr class="trc" align='center' >

<th scope="col" ><span align='center'> # </span></th>
<th scope="col">Expenses_Name- أسم مصروف</th>
<th scope="col">Amount - الميلغ</th>
<th scope="col">	Notes-ملاحظات</th>
<th scope="col">	payment_method-طريقة دفع</th>
<th scope="col">	via-من خلال</th>
<th scope="col">	Date-التاريخ</th>

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
@foreach($Expenses  as $Expense)


<tr>
<td> {{++$i}}     </td>

<td>{{$Expense ->TITLE  }} </td>

<td> {{$Expense ->Amount  }} </td>

<td> <input type='text'  name='Notes' value='{{$Expense ->Notes  }}' disabled>  </td>

<td> <input type='text'  name='passport_num' value='{{$Expense ->payment_method }}' disabled >  </td>


<td>{{$Expense ->via  }}</td>

{{-- <td><img src="../Front/IMG/{{ $Expenses -> image  }}"
style="width:50px; height:50px;"/>

<input type='file'   name='upload'   >

</td> --}}

<td> <input type='text'  name='Address' value='{{$Expense->created_at->format('Y-m-d h:i A') }}' disabled>  </td>


@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->update=='Active' )

<td  class='no-print'>

<button type="button"   class="btn btn-primary btn-sm shadow-sm px-4 mb-2" data-toggle="modal"

 data-target="#Expenses_update{{$Expense ->id  }}">
  <i class="fas fa-edit"></i>  update  تعديل
</button>

{{-- <input  onclick='reload()' type="SUBMIT" name="updateExpenses" VALUE="update"   class="btn btn-primary" style='background:yellow'> --}}


</td>



@endif


@if($userpermissions->Delete=='Active' )


<td  class='no-print'>
<div align='center'>

    <form action="{{route('Expenses.destroy',$Expense->id)}}#Expenses" method="Post">

@csrf
@method('DELETE')

<!-- <input type="hidden"  name="Expenses_id"   value="{{$Expense ->id  }}"/> -->

<input  type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
</form></div>
</td>


@endif
    @endforeach



</tr>
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

@include('Admin.Auth.Accounting_transactions_Management.Expenses.update')

</div>
<!-- /.content -->



