
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">


 <div class="card-header">
            <h5 class="m-0"> <img src="{{asset('Front/ICON/reporting.png')}}"  width='25px' height='25px'>  Movment cash_Reports   تقرير حركة الخزينة </h5>
            </div>



<div class="card-body table-responsive p-0">
                <table  id="example2" class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">cash_AN/Name      رقم/نوع الخزينة    </th>
                      <th scope="col">Transaction Date  تاريخ الحركة </th>
                      <th scope="col">Transaction _type   نوع العملية </th>
                      <th scope="col">Amount-المبلغ
                       <br/>Total:{{$cash_transaction ->sum('Amount');}}</th>
                      <th scope="col">Notes-الملاحظات</th>
                       <th scope="col">Check_id-رقم أبصال</th>
                      <th scope="col">Transaction No-  رقم العملية </th>
                    </tr>
                  </thead>
                  <tbody>
@php   $i=0;   @endphp
            @foreach($cash_transaction   as   $item )
                  <tr>
                    <td> {{++$i}}     </td>
                     <td>{{$item->Bank_cash_id}}</td>
                   <td>  {{ $item->created_at->format('Y-m-d h:i A') }}   </td>
                      <td>{{$item->transaction_type}}</td>
                      <td>{{$item->Amount}}</td>
                      <td>{{$item->notes}}</td>
                       <td>{{$item->Check_id}}</td>
                      <td>{{$item->Transaction_id}}</td>
                    </tr>
@endforeach
                  </tbody>
                </table>
</div></div>          </div></div>
