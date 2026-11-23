




<p class="card-text">


@foreach($bank  as $item)


       <div   class="card-body modal fade" id="Bank_update{{ $item ->id }}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>
                 <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">
         <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>

    <form action="{{route('Bank.update',$item ->id)}}#Bank" method="Post">


@csrf
@method('PUT')

<div class="row mb-3">
<label  class="col-md-5 col-form-label text-md-end" for="bank_Name">    bank_Name       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='Name'   value='{{ $item -> Name  }}'   align='center' placeholder='أسم حساب'    value=''  required>
</div></div>
<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="First_Balance">     First_Balance       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='First_Balance'   value='{{ $item -> First_Balance  }}'    placeholder='رصيد حساب بنكي ألأفتتاحي'    value=''  required>

</div></div>


<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="account_Number">     Bank_account_Number	       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Bank_account_Number'    placeholder='رقم حساب بنكي'     value='{{ Str_replace('B-','',$item -> account_Number)  }}'  required>

</div></div>


<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="Currency">     Currency	       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Currency'    placeholder='العملة'    value='{{ $item -> Currency  }}'  required>

</div></div>



<label   class="col-md-5 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='Notes'    placeholder='ملاحظات'    required >{{ $item -> Notes  }} </textarea>




<br/>

<input type='submit'   class="btn btn-primary"   onclick='reload()' >

</form>



                                                </div>
                 </div></div>

@endforeach
            </p>
