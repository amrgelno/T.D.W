
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
 <div class="card-header">
            <h5 class="m-0"> <img src="{{asset('Front/ICON/reporting.png')}}"  width='25px' height='25px'>  Movment Banking_Reports   تقرير حركة الحسابات البنكية  </h5>
            </div>

<div class="card-body table-responsive p-0">
                <table  id="example3" class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Bank_AN   رقم حساب بنكي  </th>
                      <th>Transaction Date  تاريخ الحركة </th>
                      <th>Transaction _type   نوع العملية </th>
                      <th>Amount-المبلغ<br/>
                    Total:{{$Bank_transaction->sum('Amount');}}</th>
                      <th>Notes-الملاحظات</th>
                       <th>Check_id-رقم أبصال</th>
                      <th>Transaction No-  رقم العملية </th>
                    </tr>
                  </thead>
                  <tbody>
                    @php   $i=0;   @endphp
                 @foreach($Bank_transaction   as   $item )
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
</div></div>          </div>

</div>
