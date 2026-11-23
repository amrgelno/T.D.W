<div class="row mb-3 form-group">

<label class="col-md-5   col-form-label text-md-end">payment_method- طريقة الدفع</label>


<select    onchange='Receiptspaymentmethod()'  name='payment_method'  class="Receipts_payment_method col-md-6 form-control mx-2">

<option  class="mx-2"  value='undefined'> payment_method - أختر وسيلة دفع </option>


<option  class="mx-2"  value="Cash" > cash -  نقدي   </option>


<option  class="mx-2"  value="Bank" > Bank - بنك </option>


</select>


</div>

<div id="paymentmethod" >

<div  class='cashpaymentmethod'  style='display:none'>
<div class="row mb-3">
<label  class="col-md-5 col-form-label text-md-end" for="cash_Name">    cash_Name       </label>

<div class="col-md-6">

<select     class="col-md-6 form-control mx-2 cashvia">

<option  class="mx-2"  @foreach($cash  as $item)
    @if(@$item -> account_Number ==@$Check->Bank_cash_id )
 value={{$item -> account_Number}} @else value='' @endif   @endforeach> select - أختر نوع خزينة </option>


@foreach($cash  as $item)


<option  class="mx-2"  value="{{ $item -> account_Number  }}" >



@if(@$item -> account_Number ==@$Check->Bank_cash_id )
&check;
@endif


    {{ $item -> cash_type  }}-{{ $item -> account_Number  }}    </option>


@endforeach

</option>

</select>
</div></div> </div>


<div   class='Bankpaymentmethod' style='display:none'>

<div class="row mb-3">
<label  class="col-md-5 col-form-label text-md-end" for="bank _Name">
bank _Name  </label>

<div class="col-md-6">

<select    class="col-md-6 form-control mx-2 bankvia">

<option  class="mx-2"
@foreach($bank  as $item)
    @if(@$item -> account_Number ==@$Check->Bank_cash_id )
 value={{$item -> account_Number}} @else value='' @endif   @endforeach> select - أختر نوع بنك </option>


@foreach($bank  as $item)
<option  class="mx-2"  value="{{ $item -> account_Number  }}" >

@if(@$item -> account_Number ==  @$Check->Bank_cash_id       )
&check;
@endif

    {{ $item -> Name  }}  - {{  $item -> account_Number  }}    </option>
@endforeach

</option>

</select>
</div>
</div></div></div>
