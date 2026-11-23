@foreach($Checks  as $Check)



       <div   class="card-body modal fade" id="Receipts_update{{ $Check ->id }}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>
                 <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">
         <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>

@foreach($customers  as $customer)

 @if($customer -> customers ->id ==   $Check->Customer_id  )
@if($customer -> customers ->classify == 'individual_Client')


<form action="{{route('Receipts.update',$Check->id)}}#Receipts" method="Post">

@elseif($customer -> customers ->classify == 'Group_Client')


<form action="{{route('CGReceipts.update',$Check->id)}}#Receipts" method="Post">


@endif

@endif

@endforeach



@csrf
@method('PUT')


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for="Check_Number">    Check_Number       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'   value='{{ $Check->Check_Number  }}'  name='Check_Number'    align='center' placeholder='رقم الأيصال'    value=''  required>
</div></div>


<input class='form-control  input-sm'   type='hidden'   value='{{ $Check->Check_Number  }}'  name='old_Check_Number'    align='center' placeholder='رقم الأيصال'    value=''  required>


<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Check_date">     Check_date       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type="datetime-local"  value='{{ $Check->Check_date  }}'  name='Check_date'    placeholder='تاريخ الأيصال'    value=''  required>

</div></div>


<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Amount">     Finnicial installments       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Amount'   value='   '   placeholder='المبلغ'    value=''  required>

</div></div>


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="Receipt_Source">     Receipt Source      </label>
<div class="col-md-6">
    <input class='form-control  input-sm' type='text'  name='Receipt_Source'  value='{{ $Check->Receipt_Source  }}'    placeholder='أسم مصدر الأيصال '    value='' required >
</div></div>




<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="Customer_Name">     Customer_Name      </label>
<div class="col-md-6">
<select   name='Customer_id'  id='ourclient'  onclick='changecustomer()'  class="ourclient col-md-6 form-control mx-2">


@foreach($customers  as $customer)
@if($customer -> customers ->id ==   $Check->Customer_id  )
<option  class="mx-2"  id="{{ $Check->Check_Number  }}-customerid"  value="{{ $customer -> customers ->id  }} " > select customer Name  - أختر  أسم العميل
</option>@endif
@endforeach

@foreach($customers  as $customer)

@if (($customer -> customers ->Balance <= (@$customer -> TripPrice -> Total_price*$customer->numbers_of_Travelers ) and ($customer -> customers ->Balance != '0')))



@if($customer -> customers ->status == 'Booked_Clients')
{{-- @if($customer -> customers ->id ==   $Check->Customer_id  ) --}}

<option  class="mx-2"     id="{{ $Check->Check_Number  }}{{ $customer -> customers ->phone  }}"   value="{{ $customer -> customers ->id  }} " >

@if($customer -> customers ->id ==   $Check->Customer_id  )
&check;
@endif


    {{ $customer -> customers ->Name  }}-{{ $customer -> customers ->phone  }} </option>

{{-- @endif --}}
@endif
@endif

@endforeach

</select>



</div></div>


@include('Admin.Auth.paymentmethod')




<br/>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>

                                                </div></div></div>

@endforeach
