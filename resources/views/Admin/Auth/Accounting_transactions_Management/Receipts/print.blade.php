<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>@foreach($Receipt  as $itemReceipt)

        Receipt_{{ $itemReceipt->Check_Number  }}  @endforeach</title>

<link href="{{ asset('Front/css/receiptprint.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

<div class="receipt-wrapper">
@foreach($Receipt  as $itemReceipt)
    <div class="header">
        <div class="store-name">

 @foreach($company  as $item)


            {{ $item-> Comp_Name  }}



<img src="{{asset('Front/IMG/'.$item->lOGO)}}"  width='110px' height='50px' />



@endforeach

</div>
        <div class="invoice-title">Receipt</div>
        <div> Number-{{ $itemReceipt->Check_Number  }} </div>
{{-- <div>{{  $item->Check_date->format('Y-m-d h:i A') }}</div> --}}
        <div>{{  $itemReceipt->Check_date}}</div>
    </div>

    <div class="meta">


<div class="meta-row">



            <span class="label">tripType-نوع رحلة
            </span>
{{-- @if($itemReceipt->status=='open')
    @foreach($trip_Booked as  $item )

            <span class="value"> {{ $item->TripPrice->packages->triptype  }}</span>

    @endforeach
@else --}}




    <span class="value"> {{ @$itemReceipt->receipts->packages->triptype }}

    {{-- {{$itemReceipt->whereceipts(TripPrice)->packages->triptype}}   --}}

    </span>



{{-- @endif --}}

        </div>




<div class="meta-row">



            <span class="label"> trip price -  سعر رحلة   </span>
{{-- @if($itemReceipt->status=='open')
    @foreach($trip_Booked as  $item )

            <span class="value"> {{ $item->TripPrice->Total_price  }}</span>

    @endforeach
@else --}}




    <span class="value"> {{ @$itemReceipt->receipts->Total_price  }}  </span>



{{-- @endif --}}
        </div>




<div class="meta-row">
            <span class="label">  Number of travelers - عدد الافراد مسافرين </span>
            <span class="value">  @foreach($trip_Booked as  $item )
{{ @$item->numbers_of_Travelers  }}  @endforeach</span>
        </div>



 <div class="meta-row">
            <span class="label"> total Amount  -  أجمالي مبلغ </span>
            <span class="value"> {{ @$itemReceipt->receipts->Total_price * @$item->numbers_of_Travelers   }}</span>
        </div>

        <div class="meta-row">
            <span class="label">customer -  العميل</span>
            <span class="value"> {{ $itemReceipt->customers->Name  }}</span>
        </div>



        <div class="meta-row">
            <span class="label">mobile - الهاتف </span>
            <span class="value">{{ $itemReceipt->customers->phone  }}</span>
        </div>

        <div class="meta-row">
            <span class="label"> sales_rep -  المندوب </span>


            <span class="value"> {{@App\Models\selesreps::where('id',$item->customers->salesrep_id)->value('Name')}}


        </div>



   <div class="meta-row">
            <span class="label">payment_method- طريقة الدفع</span>
            <span class="value">{{ $itemReceipt->payment_method  }} VIA  {{ $itemReceipt->via  }}</span>
        </div>
    </div>



       <div class="meta-row">
            <span class="label">Current Amount paid - الميلغ المدفوع الحالي  </span>
            <span class="value">{{ $itemReceipt->Amount  }}</span>
        </div>


@if((App\Models\Receipts::where('Customer_id',$itemReceipt->Customer_id)->count('Customer_id'))  > '1')
    {{-- @if($itemReceipt->status=='open')
                <div class="meta-row">
     <span class="label">  أجمالي مدفوعات :   تكلفة رحلة    </span>

 <span class="value"> {{(@$item->TripPrice->Total_price*@$item->numbers_of_Travelers)-(@$itemReceipt->customers->Balance ) }} </span>
             : {{@$item->TripPrice->Total_price*@$item->numbers_of_Travelers}} </div>
         <div class="meta-row">


     <span class="label">رصيد العميل  </span>


 <span class="value"> {{(  @$itemReceipt->customers->Balance ) }} </span>
         </div>



@else --}}

      <div class="meta-row">
     <span class="label">  أجمالي مدفوعات :   تكلفة رحلة    </span>

 <span class="value"> {{(@$itemReceipt->receipts->Total_price*@$item->numbers_of_Travelers)-(@$itemReceipt->customers->Balance ) }} </span>
             : {{@$itemReceipt->receipts->Total_price*@$item->numbers_of_Travelers}} </div>
         <div class="meta-row">


     <span class="label">رصيد العميل  </span>


 <span class="value"> {{(  @$itemReceipt->customers->Balance ) }} </span>
         </div>

{{-- @endif --}}
@else
         <div class="meta-row">

 <span class="label">remaining Amount  -  المبلغ المتبقي </span>
            <span class="value">

      {{-- @if($itemReceipt->status=='open')
    @foreach($trip_Booked as  $item )

            <span class="value">  {{(@$item->TripPrice->Total_price*@$item->numbers_of_Travelers) -   $itemReceipt->Amount  }}</span>

    @endforeach
@else --}}

 <span class="value"> {{(@$itemReceipt->receipts->Total_price*@$item->numbers_of_Travelers) -   $itemReceipt->Amount  }} </span>

{{-- @endif --}}

  </div>

@endif


</span>


       <div class="meta-row">
            <span class="label">Total_Discount -أجمالي الخصم  </span>
            <span class="value">{{ $itemReceipt->Discount  }}</span>
        </div>


@if($itemReceipt-> customers -> classify == 'Group_Client')

<div class="meta-row">
            <span class="label">Group Booking Balances:- </span>
            <span class="value">{{\App\Models\customers::where('salesrep_id',$itemReceipt-> customers ->salesrep_id )->where('classify','Group_Client')->sum('Balance')  }}</span>
        </div>




<div class="meta-row">
            <span class="label">Total Balances:-  </span>
            <span class="value">{{ \App\Models\customers::where('salesrep_id',$itemReceipt-> customers ->salesrep_id )->sum('Balance')  }}</span>
        </div>

@endif


<div class="meta-row">
            <span class="label">Receipt Source - أسم مصدر الأيصال</span>
            <span class="value">{{ $itemReceipt->Receipt_Source }}
        </div>
<span>---------------------------------------------------------------</span>
<div class="meta-row">

            <span class="label"> Hotline -  خط الساخن </span>
            <span class="value">@foreach($company  as $item) 20{{ $item->Tele_Number }} @endforeach </span>
        </div>


    </div>





@endforeach




    </div>





    <div class="no-print">
        <button class="btn btn-print" onclick="window.print()">طباعة</button>
        <button class="btn btn-close" onclick="window.close()">إغلاق</button>
    </div>

</div>

<!-- <script>
    window.onload = function () {
        setTimeout(function () {
            window.print();
        }, 700);
    };
</script> -->

</body>
</html>
