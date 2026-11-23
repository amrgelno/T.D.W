
@foreach($customers  as $customer)
<div     class="card-body modal fade"

id="GroupClient-show{{$customer->id}}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>

<div class="modal-dialog modal-dialog-centered">

<div class="modal-content px-3 rounded-lg shadow" style='width: 165%;'>
<button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
<span aria-hidden="true" style="font-size: 1.5rem;">×</span>

<table   border="1"  class="table table-responsive" >

                  <thead>

<tr class="trc" align='center' >

<th scope="col">status-حالة العميل </th>

<th scope="col">booking_method-طريقة حجز   </th>

<th scope="col">Notes-ملاحظات</th>

<th scope="col">totalbalance-أجمالي رصيد  مقابل الحجز </th>

<th scope="col" class='no-print'>edit</th>

<th scope="col"> Booking_date - تاريخ الحجز </th>

</tr>
</thead>




 @php   $i=0;   @endphp
@foreach($customers  as $customer)

 @foreach($selesreps  as $selesrep) @if ( $customer -> customers -> salesrep_id ==  $selesrep ->id  )

</tr>
<td>{{ $customer -> customers ->status  }}  <br/>
@if($customer -> customers ->status == 'Booked_Clients')
@if(($customer -> customers ->Balance == (@$customer -> TripPrice -> Total_price * $customer->numbers_of_Travelers) ))
<i data-target="#clientReceipt-create{{ $customer -> customers ->id  }}" data-toggle="modal"  class="fas fa-receipt" title='Creatreceipt   أنشاء أيصال '></i>Tentatively reserved- محجوز مبدئًيا
@elseif (($customer -> customers ->Balance < @$customer -> TripPrice -> Total_price * $customer->numbers_of_Travelers)and($customer -> customers ->Balance != '0'))
<i data-target="#clientReceipt-create{{ $customer -> customers ->id  }}" data-toggle="modal"  class="fas fa-receipt" title='Creatreceipt   أنشاء أيصال '></i>partially paid-مدفوع جزئًيا
@elseif (($customer -> customers ->Balance == '0'))
Fully paid- مدفوع بالكامل
@endif

@endif
</td>
<td>{{ $customer -> customers ->booking_method  }}</td>
<td> {{ $customer -> customers ->notes  }} </td>

<td> {{ $customer -> customers ->Balance    }}

@if($customer -> customers ->classify == 'individual_Client')

<h6>    individual_Client    </h6>

@elseif($customer -> customers ->classify == 'Group_Client')

<h6>  Group_Client       </h6>



@endif
</td>

<td  class='no-print'>


@if(($customer -> customers ->Balance - @$customer -> TripPrice -> Total_price * $customer->numbers_of_Travelers )=='0')
<button type="button"   class="btn btn-primary btn-sm shadow-sm px-4 mb-2" data-toggle="modal"

 data-target="#Booked_Clients_update{{ $customer -> customers ->id  }}">
  <i class="fas fa-edit"></i>  update Booking  تعديل حجز
</button>
@elseif (empty($customer -> customers ->Balance) )

<button type="button"   class="btn btn-primary btn-sm shadow-sm px-4 mb-2" data-toggle="modal"

 data-target="#Booked_Clients_update{{ $customer -> customers ->id  }}">
  <i class="fas fa-edit"></i>  update Client Data   تعديل
</button>
@elseif ($customer -> customers ->Balance == '0'   )


<button type="button"   class="btn btn-primary btn-sm shadow-sm px-4 mb-2" data-toggle="modal"

 data-target="#Booked_Clients_update{{ $customer -> customers ->id  }}">
  <i class="fas fa-edit"></i>  New Booking           أضافة حجز جديد
</button>

@endif
</td>


<td>{{ $customer->created_at->format('Y-m-d h:i A') }}</td></tr>


@endif
@endforeach @endforeach

</table>

<div style='display:flex;'>
 <h6    class="card-title">     Group Client    عميل مجموعات         </h6>


 <h4    class="card-title">Customer Name:- {{ $customer -> customers ->Name  }}  </h4>


 <h3     class="card-title">Group Booking Balances:- {{\App\Models\customers::where('salesrep_id',$selesrep->id)->where('classify','Group_Client')->sum('Balance')  }}  </h3>


<h3    class="card-title">Total Balances:- {{ \App\Models\customers::where('salesrep_id',$selesrep->id)->sum('Balance')  }}  </h3>
</div>

</div>


</div>

</div>


@endforeach
