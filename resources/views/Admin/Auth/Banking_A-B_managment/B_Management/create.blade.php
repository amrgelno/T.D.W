 <p class="card-text">

<form action="{{ route('Bank.store') }}#Bank"    method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')

<div class="row mb-3">
<label  class="col-md-5 col-form-label text-md-end" for="bank_Name">    bank_Name       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='Name'    align='center' placeholder='أسم حساب'    value=''  required>
</div></div>
<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="First_Balance">     First_Balance       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='First_Balance'    placeholder='رصيد حساب بنكي ألأفتتاحي'    value=''  required>

</div></div>


<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="account_Number">     Bank_account_Number	       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Bank_account_Number'    placeholder='رقم حساب بنكي'    value=''  required>

</div></div>



<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="Currency">     Currency	       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Currency'    placeholder='العملة'    value=''  required>

</div></div>



<label   class="col-md-5 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='Notes'    placeholder='ملاحظات'    required > </textarea>


<br/>

<input type='submit'   class="btn btn-primary"   onclick='reload()' >

</form>


            </p>
