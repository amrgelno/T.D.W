 <p class="card-text">

<form action="{{ route('Expenses.store') }}#Expenses"  name="Expenses"   method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for="Expenses_Name">    Expenses_Name       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='Expenses_Name'    align='center' placeholder='أسم مصروف'    value=''  required>
</div></div>



@include('Admin.Auth.paymentmethod')


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="Amount">     Amount      </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='Amount'    placeholder='المبلغ'     required >
</div></div>


<label   class="col-md-5 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='Notes'    placeholder='ملاحظات'    required > </textarea>





<br/>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>

</ul>


            </p>
