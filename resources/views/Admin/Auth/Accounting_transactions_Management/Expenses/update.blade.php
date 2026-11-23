 <p class="card-text">

@foreach($Expenses  as $Expense)

   <div   class="card-body modal fade" id="Expenses_update{{$Expense->id}}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>
                 <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">
         <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>



    <form action="{{route('Expenses.update',$Expense->id)}}#Expenses" method="Post">

@csrf
@Method('PUT')


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for="Expenses_Name">    Expenses_Name       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='Expenses_Name'  value='{{$Expense ->TITLE  }}'     align='center' placeholder='أسم مصروف'    required>
</div></div>



@include('Admin.Auth.paymentmethod')


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="Amount">     Amount      </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='Amount'    placeholder='المبلغ'    value='{{$Expense ->Amount  }}' required >
</div></div>


<label   class="col-md-5 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='Notes'    placeholder='ملاحظات'    required > '{{$Expense ->Notes  }} </textarea>





<br/>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>


                                                </div></div></div>


@endforeach


</ul>


            </p>
