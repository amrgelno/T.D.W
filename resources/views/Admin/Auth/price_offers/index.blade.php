
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
            <h5 class="m-0"><span class="fas fa-dollar-sign"></span> price|offers        الأسعار و العروض  </h5>
            </div>


            <div class="card-body modal fade" id="price-add" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true">



                       <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">

<div>
  <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>  </div>



            <h6 class="card-title">Fill the price|offers form below </h6>




@include('Admin.Auth.price_offers.create')




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

<button type="button" class="btn btn-secondary btn-sm shadow-sm px-4 mb-2" data-toggle="modal" data-target="#price-add">
<i class="fa fa-plus mr-1"></i>   add-price|offers  أضافة عروض أسعار
</button>


            <h6 class="card-title">You can Add New packages via this button  :- &nbsp; </h6>
@endif

@endforeach
<br/>


<table border="1"  class="table table-responsive" >


<thead>
<tr class="trc" align='center'>
<th scope="col"><span align='center'> # </span></th>
<th scope="col"> triptype-نوع الرحلة </th>
<th scope="col">  trip_price - سعر الرحلة</th>
<th scope="col">  Service_level -  مستوى الأقامة	</th>

{{-- <th scope="col">Number_of_travelers - تكلفة المواصلات</th>

<th scope="col">	trip_price Details - تفاصيل سعر رحلة</th> --}}

<th scope="col">	Notes-ملاحظات</th>

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

@foreach($packages  as $package)

@if($package->packages-> status == 'Active')

<tr>

<!-- <td><?PHP echo $package->id;?></td> -->

<td> {{++$i}}     </td>

<td>

<input type='text'  name='triptype' value='{{ $package -> packages -> triptype  }}' disabled >  </td>

<td> <input type='text'  name='Total_price' value='{{ $package ->  Total_price  }}'  disabled >  </td>

<td> <input type='text'  name='Service_level' value='{{ $package -> packages-> Service_level  }}' disabled >  </td>

{{-- <td> <input type='text'  name='Number_of_travelers' value='{{ $package -> Number_of_travelers	  }}' disabled >  </td> --}}

<td> <textarea type='text'  name='notes' disabled >{{ $package  -> packages->notes  }}</textarea>  </td>


@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->update=='Active' )

<td>
<button type="button" class="btn btn-primary btn-sm shadow-sm px-4 mb-2" data-toggle="modal"

 data-target="#packages_update{{ $package -> packages->id  }}">
  <i class="fas fa-edit"></i>  update  تعديل
</button>


</td>

@endif


@if($userpermissions->Delete=='Active' )
<td>
<div align='center'>
<form action="{{route('packages.destroy', $package -> packages -> id)}}#price_offers" method="Post">
@csrf
@method('DELETE')

<!-- <input type="hidden"  name="packages_id"   value="{{ $package -> id  }}"/> -->

<input     type="SUBMIT" name="DELETE" VALUE="x"   class="btn btn-primary" style='background:red'>
</form></div>
</td>



@endif
    @endforeach

</tr>
@endif
    @endforeach
</table>


            </div>
        </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
@include('Admin.Auth.price_offers.update')
    </div><!-- /.container-fluid -->
</div>



</div>
<!-- /.content -->



