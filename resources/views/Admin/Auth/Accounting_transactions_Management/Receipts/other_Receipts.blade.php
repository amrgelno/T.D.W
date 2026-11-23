
            <div class="card-body modal fade" id="other_Receipts-add" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true">



                       <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">

<div>
  <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق"  onclick="document.querySelector('#Receiptsselector').setAttribute('data-target','')">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>  </div>
<p class="card-text">

<form  name="Receiptsform"  action="{{ route('ReceiptsHolders.store') }}#Receipts"   name='update'   method="post"   enctype="multipart/form-data">

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

<label  class="col-md-6 col-form-label text-md-end"  for="Receipt_holders_Name">     Name      </label>
<div class="col-md-6">

@if(count($receiptsholders)>'0')

<select name="selector_Receipt_holders_No"  class="col-md-6 form-control mx-2"  id="Receipt_holders"    onchange="ChangeReceipt_holders()">

<option  class="mx-2" > select -  أختر  </option>

@foreach ($receiptsholders as $receiptsholder )

<option value="{{  $receiptsholder->id  }}"> {{  $receiptsholder->Name  }} - code:{{  $receiptsholder->id  }} </option>

@endforeach

<option value="NewReceipt_holders">   New Name  اسم جديد</option>
</select>

@endif
</div> </div>




<div class="row mb-3"  id="Receipt_holdersinput" @if(count($receiptsholders)>'0') style='display:none' @else style='display:flex' @endif >

<div class="col-md-6 d-flex">

<input class="form-control  input-sm"  type="number"    id="Receipt_holders_No"   name="Receipt_holders_No"    placeholder='كود مصدر لي'    value='' required  >

<input class="form-control  input-sm" type="text"     id="Receipt_holders_Name"   name="Receipt_holders_Name"    placeholder='مصدر لي'    value='' required >

</div></div>

@include('Admin.Auth.paymentmethod')

<br/>

<input type="submit"   class="btn btn-primary"   onclick="reload()" >


</form>

</ul>


            </p>

        </div>
        </div>
   </div>
        </div>
