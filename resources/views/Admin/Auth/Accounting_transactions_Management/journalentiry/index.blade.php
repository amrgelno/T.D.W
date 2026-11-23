
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
            <h5 class="m-0"> <img src="{{asset('Front/ICON/taxation.png')}}"  width='25px' height='25px'>  journalentiry   اليومية العامة  </h5>
            </div>


            <div class="card-body modal fade" id="journalEntiry-add" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true">



                       <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">

<div>
  <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>  </div>



@include('Admin.Auth.Accounting_transactions_Management.journalentiry.create')

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

<button   type="button" class=" btn btn-secondary btn-sm shadow-sm px-4 mb-2" data-toggle="modal" data-target="#journalEntiry-add">
<i class="fa fa-plus mr-1"></i>   add-journalEntiry     إضافة يومية
</button>

@endif

@endforeach

<br/>

 {{-- <div   class="no-print dt-buttons btn-group flex-wrap">
  <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button>
    <button id="export" class="btn btn-secondary buttons-csv buttons-html5"  type="button"><span>Export Excel</span></button>
     <button onclick="printcontent('ex')"   type="button"  class="btn btn-secondary buttons-print"  type="button"><i class="fas fa-print"></i><span>Print</span></button>
    <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true">
        <span>Column visibility</span><span class="dt-down-arrow"></span></button></div>
    </div>  --}}

<table border="1"  class="table table-responsive" >


                  <thead>

<tr class="trc" align='center' >

<th scope="col" ><span align='center'> # </span></th>
<th scope="col">Date -التاريخ</th>
<th scope="col">Transaction - البيان</th>
<th scope="col">Debit-المدين</th>

<th scope="col">Credit-دأين</th>

{{-- <th scope="col">Image-الصورة</th> --}}
<th scope="col">	Amount-المبلغ</th>


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
@foreach($journalentiry  as $item)


<tr>
<td> {{++$i}}     </td>

<td>{{  $item ->created_at->format('Y-m-d h:i A') }} </td>

<td> {{ $item ->Transaction  }} </td>

<td> <input type='text'  name='phone' value='{{ $item ->Debit  }}' disabled>  </td>

<td> <input type='text'  name='passport_num' value='{{ $item ->Credit }}' disabled >  </td>

<td> <input type='text'  name='Address' value='{{ $item ->Amount  }}' disabled>  </td>

@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->update=='Active' )
<td  class='no-print'>

<button type="button"   class="btn btn-primary btn-sm shadow-sm px-4 mb-2" data-toggle="modal"

 data-target="#journalentiry_update{{ $item ->id  }}">
  <i class="fas fa-edit"></i>  update  تعديل
</button>

{{-- <input  onclick='reload()' type="SUBMIT" name="updateentiries" VALUE="update"   class="btn btn-primary" style='background:yellow'> --}}


</td>

@endif


@if($userpermissions->Delete=='Active' )

<td  class='no-print'>
<div align='center'>
<form action="{{route('entiries.destroy',$item ->id)}}#journalentiry" method="Post">
@csrf
@method('DELETE')

<!-- <input type="hidden"  name="entiries_id"   value="{{ $item ->id  }}"/> -->

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


@include('Admin.Auth.Accounting_transactions_Management.journalentiry.update')



</div>
<!-- /.content -->



