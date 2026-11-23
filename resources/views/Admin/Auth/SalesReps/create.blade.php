 <p class="card-text">

<form action="{{ route('selesreps.store') }}#SalesReps"    method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for=" SalesRep_Name">    SalesRep Name       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='SalesRep_Name'    align='center' placeholder='أسم مندوب مبيعات'    value=''  required>
</div></div>


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="phone">     Mobile       </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='phone'    placeholder='رقم موبيل'    value='' required >
</div></div>


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="Address">     Address       </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='Address'    placeholder='العنوان'    value='' required >
</div></div>


<label   class="col-md-5 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='Notes'    placeholder='ملاحظات'    required > </textarea>





<br/>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>

</ul>


            </p>
