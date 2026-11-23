 <p class="card-text">

<form action="{{ route('cash.store') }}#cash"    method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')

<div class="row mb-3">
<label  class="col-md-5 col-form-label text-md-end" for="cash_Name">    cash_Name       </label>

<div class="col-md-6">

<div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
<input  class='form-control  input-sm' id='cash_Name'  type='text'  name='cash_Name'    align='center' placeholder='أسم خزينة '    value=''  ></span>
                      </div>


                    </div>

</div></div>
<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="First_Balance">     First_Balance       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='First_Balance'    placeholder='رصيد حساب النقدية ألأفتتاحي'    value=''  required>

</div></div>


<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="account_Number">     cash_account_Number	       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='cash_account_Number'    placeholder='رقم حساب خزينة'    value=''  required>

</div></div>

<label   class="col-md-5 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='Notes'    placeholder='ملاحظات'    required > </textarea>


<br/>

<input type='submit'   class="btn btn-primary"   onclick='reload()' >

</form>


            </p>
