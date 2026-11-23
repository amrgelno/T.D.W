


@foreach($journalentiry  as $item)

   <div   class="card-body modal fade" id="journalentiry_update{{  $item ->id  }}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>
                 <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">
         <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>
 

<form action="{{ route('entiries.update', $item->id) }}#journalentiry"    method="post"   enctype="multipart/form-data">

@csrf
@Method('PUT')


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for="Transaction">    Transaction       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='Transaction'    align='center' placeholder='البيان'    value='{{ $item ->Transaction  }}'  required>
</div></div>
<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Debit">     Debit       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Debit'    placeholder='المدين'    value='{{ $item ->Debit  }}'  required>

</div></div>


<div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Credit">     Credit       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Credit'    placeholder='دأين'    value='{{ $item ->Credit }}'  required>

</div></div>


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="Amount">     Amount      </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='Amount'    placeholder='المبلغ'    value='{{ $item ->Amount  }}' required >
</div></div>




<br/>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>



                                                </div></div></div>
@endforeach
