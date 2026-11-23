@foreach($customers  as $customer)


<div  style="overflow-x: hidden; overflow-y: auto;" class="card-body modal  show" id="clientReceipt-create{{ $customer -> customers ->id  }}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered">


            <div class="modal-content px-3 rounded-lg shadow">

<div>
<button type="button" class="close" data-dismiss="modal" aria-label="إغلاق" >
    <span aria-hidden="true" style="font-size: 1.5rem;" onclick="document.querySelector('#Clientselector').setAttribute('data-target','');">  ×   </span>
</button>  </div>


<p class="card-text">

<form  name="Receiptsform"

@if($customer -> customers ->classify == 'Group_Client')

action="{{ route('CGReceipts.store') }}#Receipts"


@elseif($customer -> customers ->classify == 'individual_Client')

action="{{ route('Receipts.store') }}#Receipts"

@endif


name='update'   method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for="Check_Number">    Receipt_Number       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='Check_Number'    align='center' placeholder='رقم الأيصال'    value=''  required>
</div></div>
<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Check_date">     Check_date       </label>

<div class="col-md-6">

<input class="form-control  input-sm" type="datetime-local"  name="Check_date"    placeholder='تاريخ الأيصال'    value=''  required>

</div></div>


<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Amount">     Finnicial installments       </label>

<div class="col-md-6">

<input class="form-control  input-sm" type="text"  name="Amount"    placeholder="المبلغ"    value=''  required>

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
<select   name="Customer_id"  class="col-md-6 form-control mx-2">

<option  value="{{ $customer -> customers ->id  }}" >   {{ $customer -> customers ->Name  }} </option>

</select>


</div></div>


@include('Admin.Auth.paymentmethod')




<br/>


<input type="submit"   class="btn btn-primary"   onclick='reload()' >


</form>

</ul>

            </p>

            </div>

                       </div></div>



                       @endforeach
