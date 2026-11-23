<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title> @foreach($Receipt  as $itemReceipt)

        Receipt_{{ $itemReceipt->Check_Number  }}  @endforeach </title>

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
            <span class="label">Receipt_holders_Name - أسم حامل الأيصال</span>
            <span class="value"> {{   $itemReceipt->receiptsholders->Name  }} </span>
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

</span>


       <div class="meta-row">
            <span class="label">Total_Discount -أجمالي الخصم  </span>
            <span class="value">{{ $itemReceipt->Discount  }}</span>
        </div>



            <div class="meta-row">
            <span class="label">Net Amount paid -  صافي المبلغ المدفوع </span>
            <span class="value">{{$itemReceipt->Amount - $itemReceipt->Discount  }}</span>
        </div>

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

    <div class="no-print">
        <button class="btn btn-print" onclick="window.print()">طباعة</button>
        <button class="btn btn-close" onclick="window.close()">إغلاق</button>
    </div>

</div>


</body>
</html>
