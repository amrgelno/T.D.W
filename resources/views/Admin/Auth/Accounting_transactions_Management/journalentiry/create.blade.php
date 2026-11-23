 <p class="card-text">

<form action="{{ route('entiries.store') }}#journalentiry"    method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for="Transaction">    Transaction       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='Transaction'    align='center' placeholder='البيان'    value=''  required>
</div></div>
<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Debit">     Debit       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Debit'    placeholder='المدين'    value=''  required>

</div></div>


<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Credit">     Credit       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Credit'    placeholder='دأين'    value=''  required>

</div></div>


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="Amount">     Amount      </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='Amount'    placeholder='المبلغ'    value='' required >
</div></div>




<br/>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>

</ul>


            </p>
