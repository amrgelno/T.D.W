
<div class="card-body modal fade" id="Receipts-add" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true">



                       <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">

<div>
  <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق"  onclick="document.querySelector('#Receiptsselector').setAttribute('data-target','')">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>  </div>



<p class="card-text">


<form id="Receiptsform" name="Receiptsform"   action="{{ route('Receipts.store') }}#Receipts"   name="update"   method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')

<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for="Check_Number">    Receipt_Number       </label>

<div class="col-md-6">

<input class="form-control  input-sm"   type="text"  name="Check_Number"    align="center" placeholder='رقم الأيصال'    value=''  required>
</div></div>
<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Check_date">     Check_date       </label>

<div class="col-md-6">

<input class="form-control  input-sm" type="datetime-local"  name="Check_date"    placeholder='تاريخ الأيصال'    value=''  required>

</div></div>


<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Amount">     Finnicial installments       </label>

<div class="col-md-6">

<input class="form-control  input-sm"     type="text"  name="Amount"    placeholder='المبلغ'    value=''  required>

</div></div>


<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Discount">     Discount       </label>

<div class="col-md-6">

<input class="form-control  input-sm" type="text"  name="Discount"    placeholder='خصم'    value=''  required>

</div></div>


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="Receipt_Source">     Receipt Source      </label>
<div class="col-md-6">
    <input class="form-control  input-sm" type="text"  name="Receipt_Source"    placeholder='أسم مصدر الأيصال '    value='' required >
</div></div>



<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="Customer_Name">     Customer_Name      </label>
<div class="col-md-6">
<select  name="Customer_id" id="ourclient"    onchange="changecustomer()"
class="ourclient col-md-6 form-control mx-2">
<option  id="customerid" class="mx-2"> select customer Name  - أختر  أسم العميل
</option>
@foreach($customers  as $customer)
@if($customer -> customers ->status == 'Booked_Clients')

{{-- @if (($customer -> customers ->Balance == (@$customer -> TripPrice -> Total_price*$customer->numbers_of_Travelers ) )) --}}
@if (($customer -> customers ->Balance <= (@$customer -> TripPrice -> Total_price*$customer->numbers_of_Travelers ) and ($customer -> customers ->Balance != '0')))

@if($customer -> customers ->status == 'Booked_Clients')

<option  data-name="{{$customer -> customers ->classify}}"  class="{{$customer -> customers ->classify}} mx-2"     id="c-{{ $customer -> customers ->phone  }}"   value="{{ $customer -> customers ->id  }}" >   {{ $customer -> customers ->Name  }}-{{ $customer -> customers ->phone  }}  </option>
@endif
@endif
@endif
@endforeach
</select>



</div></div>


@include('Admin.Auth.paymentmethod')




<br/>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>

</ul>


            </p>

        </div>
        </div>
   </div>
        </div>
