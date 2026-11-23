
@foreach($Checks  as $Check)


<div   class="card-body modal fade" id="payments-show{{$Check->id}}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>
<div class="modal-dialog modal-dialog-centered">

<div class="modal-content px-3 rounded-lg shadow">
<button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
<span aria-hidden="true" style="font-size: 1.5rem;">×</span>

<table   border="1"  class="table table-responsive" >


<tr class="trc" align='center' >

<th scope="col" ><span align='center'> # </span></th>
<th scope="col"> Receipt_Number -رقم الأيصال</th>
<th scope="col"> payments-المدفوعات</th>
 <th scope="col"> Receipt_date - تاريخ الأيصال</th>
 {{-- <th scope="col">Update_payment -تعديل </th> --}}

 @if( $Check->status   =='open')
<th scope="col">Delete_payment - حذف</th>
@endif

</tr>
 @php   $i=0;   @endphp
@foreach ($payments as $payment )
@if($Check->Check_Number == $payment->Receipts_id  )


</tr>



<td> {{++$i}}  </td>
<td> {{ $payment-> Receipts_id     }} </td>
<td>{{ $payment->  F_Payments     }} </td>
<td>{{ $Check->created_at->format('Y-m-d h:i A') }}</td>

<td>@if( $Check->status   =='open')
    <a  data-toggle="modal" data-target="#payment-delete{{$payment->id}}"   href="#payment-delete{{$payment->id}}"  type="SUBMIT" name="DELETE" VALUE="x" form="delete-paymentform[{{ $payment->id }}]"   class="btn btn-primary" style='background:red'> x DELETE</a>
@endif</td>

</tr>

@endif
@endforeach
</table>
</div></div>

</div>






@foreach ($payments as $payment )
@if($Check->Check_Number == $payment->Receipts_id  )
<form action="{{ route('payments.destroy', $payment->id) }}?#Receipts"

   id="delete-paymentform[{{ $payment->id }}]"  method="Post" />

   @csrf
@method('DELETE')


 <div  style="overflow-x: hidden; overflow-y: auto;" class="card-body modal  show"

 id="payment-delete{{$payment->id}}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true" style='padding: 2px;'>



                       <div class="modal-dialog modal-dialog-centered">


            <div class="modal-content px-3 rounded-lg shadow" style="padding-bottom: 20px;">

<div>
<button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
    <span aria-hidden="true" style="font-size: 1.5rem;" >  ×   </span>
</button>  </div>



<div class="delete_payment" style='text-align: center;'>  هل تريد حذف  مبلغ من رصيد المدفوعات ؟
<br/>
Did you Need to Delete Payment?
</div>


<div class='d-flex justify-content-between'>
<button type="submit" class="btn btn-primary col-md-3"  style='background:rgb(0, 60, 255); color:white'  >

Save حفظ

</button>


<button type="button" class="btn btn-primary col-md-3"  data-dismiss="modal" aria-label="إغلاق" style='background:red; color:white;'>
 cancelالغاء

</button>
</div>


            </div>
                       </div>
                       </div>
</form>

@endif
@endforeach







@endforeach





 @if($massage=Session::get('paymentDeleted_success'))



<div class="swal2-container swal2-center swal2-backdrop-show" data-swal2-theme="light" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
  <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
  <div class="swal2-success-ring"></div>
  <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
  <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
</div><div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: block;">{{$massage}}!</h2><div class="swal2-html-container" id="swal2-html-container" style="display: block;">تم حذف الدفعة بنجاح !
payment Deleted success!
</div><input id="swal2-input" class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select id="swal2-select" class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label class="swal2-checkbox" style="display: none;"><input type="checkbox" id="swal2-checkbox"><span class="swal2-label"></span></label><textarea id="swal2-textarea" class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions" style="display: flex;"><div class="swal2-loader"></div>
<button onclick=" document.querySelector('.swal2-container').style.display='none'" type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(112, 102, 224, 0.5);">OK </button><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(220, 55, 65, 0.5);">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(255, 0, 0, 0.5);">Cancel</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div>

                                    @endif

 {{-- @if($massage=Session::get('Receiptsfaild'))


<div class="swal2-container swal2-center swal2-backdrop-show" data-swal2-theme="light" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: block;">{{$massage}}!</h2><div class="swal2-html-container" id="swal2-html-container" style="display: block;">خطأ رقم الايصال مكرر</div><input id="swal2-input" class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select id="swal2-select" class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label class="swal2-checkbox" style="display: none;"><input type="checkbox" id="swal2-checkbox"><span class="swal2-label"></span></label><textarea id="swal2-textarea" class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions" style="display: flex;"><div class="swal2-loader"></div><button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(212, 0, 0, 0.5);" onclick=" document.querySelector('.swal2-container').style.display='none'">OK</button><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(220, 55, 65, 0.5);">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(255, 0, 0, 0.5);">Cancel</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div>



                                    @endif --}}
