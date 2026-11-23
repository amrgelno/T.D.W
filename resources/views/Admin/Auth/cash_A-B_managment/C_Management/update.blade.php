 <p class="card-text">


@foreach($cash  as $item)


       <div   class="card-body modal fade" id="cash_update{{ $item ->id }}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>
                 <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">
         <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>

<form action="{{route('cash.update',$item ->id)}}#cash" method="Post">

@csrf
@method('PUT')

<div class="row mb-3">
<label  class="col-md-5 col-form-label text-md-end" for="cash_Name">    cash_Name       </label>

<div class="col-md-6">

<div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
<input  class='form-control  input-sm' id='cash_Name'  type='text'  name='cash_Name'    align='center' placeholder='أسم خزينة '    value='{{ $item -> cash_type  }}'  required></span>
                      </div>

                    </div>

</div></div>
<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="First_Balance">     First_Balance       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='First_Balance'    placeholder='رصيد حساب النقدية ألأفتتاحي'    value='{{ $item -> First_Balance  }}'  required>

</div></div>


<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="account_Number">     cash_account_Number	       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='cash_account_Number'    placeholder='رقم حساب خزنة '    value='{{ Str_replace('C-','',$item -> account_Number)  }}'  required>

</div></div>

<label   class="col-md-5 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='Notes'    placeholder='ملاحظات'    required > {{  $item -> Notes }}</textarea>


<br/>

<input type='submit'   class="btn btn-primary"   onclick='reload()' >

</form>



                                                </div>
                 </div></div>

@endforeach
            </p>
